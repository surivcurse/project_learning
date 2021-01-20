var MemberID = 0;

var u_info = null;

function readCookie(name) {
	let nameEQ = name + '='
	let ca = document.cookie.split(';')
	for (let i = 0; i < ca.length; i++) {
		let c = ca[i]
		while (c.charAt(0) == ' ') c = c.substring(1, c.length)
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length)
	}
	return null
}

function readUInfo(){
	var uinfo = readCookie('kuid');
	if(uinfo != null){
		u_info = uinfo
	}
}
//self.userLogin.token_miniapp+self.userLogin.member_id
function getMemberID(){
	if( u_info == null){
		readUInfo();
	}
	u_info = JSON.parse(uinfo);
		// if(u_info!=null){
		// 	if(u_info.member_id != undefined){
		// 		MemberID = u_info.member_id;
		// 	}
			
		// }
	return u_info
}


function getUserToken(){
	// var UserToken = "";
	if( u_info == null){
		readUInfo();
	}
	// if(u_info!=null){
	// 	if(u_info.token_miniapp != undefined && u_info.member_id != undefined){
	// 		UserToken = u_info.token_miniapp+u_info.member_id;
	// 	}
	// }
	return u_info;
}


function getHeaders(r=false){
	var isTest = false;
    var headers = {
        "webkey":"e78WG_v1KYE",
    };
    if(r){
		if(isTest){
			headers.MID = "0"; 
			headers.TOKEN = "testdata";
		}else{
			// if(MemberID != 0){
			// 	headers.MID = ""+getMemberID();
			// }
			var UserToken = getUserToken();
			if(UserToken!= ""){
				headers.TOKEN = ""+UserToken;
			}
		}
	}
    return headers;
}

$.mycurl = {
    gets: function(u,r,callback){
		$.ajax({
            url: u,
            headers:getHeaders(r),
			type: "GET",
			success: function(resp){
				if(typeof callback==="function")
					callback(resp ? resp : {"status": 501})
			},
			error: function(err){
				if(typeof callback==="function")
					callback(err ? err : {"status": 501})
			}
		})
	},

	posts: function(u,r, d, callback){
		$.ajax({
            url: u,
            headers:getHeaders(r),
			type: "POST",
			data: JSON.stringify(d),
			success: function(resp){
				if(typeof callback==="function")
					callback(resp ? resp : {"status": 501})
			},
			error: function(err){
				if(typeof callback==="function")
					callback(err ? err : {"status": 501})
			}
		})
	},
	postsMultipart: function(u,r, d, callback){
		var src='';
		if(d){
			src = new FormData();
			$.each(d, function(i, v){
				src.append(i, v);
			})
		}

		$.ajax({
            url: u,
            headers:getHeaders(r),
			type: "POST",
			processData: false,
			contentType: false,
			data: src,
			mimeType: "multipart/form-data",
			success: function(resp){
				if(typeof callback==="function")
					callback(resp ? resp : {"status": 501})
			},
			error: function(err){
				if(typeof callback==="function")
					callback(err ? err : {"status": 501})
			}
		})
	},
	uploadfile: function(u,r, d, callback, field_name){
		var src='';
		var field_name = typeof	field_name!="undefined" && field_name ? field_name : "media";

		if (d) {
			src = new FormData();

			if (typeof d.length == "undefined") {
				src.append(field_name, d);
			} else {
				$.each(d, function(i, v){
					src.append(field_name+"["+i+"]", v);
				})
			}
		}

		$.ajax({
            url: u,
            headers:getHeaders(r),
			type: (src ? "POST" : "GET"),
			data: src,
			processData: false,
			contentType: false,
			success: function(resp){
				if(typeof callback==="function")
					callback(resp ? resp : {"status": 501})
			},
			error: function(err){
				if(typeof callback==="function")
					callback(err ? err : {"status": 501})
			}
		})
	}
}