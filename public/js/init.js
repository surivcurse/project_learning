var config = {
  ".chosen-select": {},
  ".chosen-select-deselect": { allow_single_deselect: true },
  ".chosen-select-no-single": { disable_search_threshold: 10 },
  ".chosen-select-no-results": { no_results_text: "Oops, nothing found!" },
  ".chosen-select-rtl": { rtl: true },
  ".chosen-select-width": { width: "95%" },
};
for (var selector in config) {
  $(selector).chosen(config[selector]);
}

var app = new Vue({
  el: "#popup2",
  data: {
    message: "Hello Vue!",
  },
  methods: {
    checkForm: function (e) {
      e.preventDefault();
      //alert("hello world");
    },
  },
});
