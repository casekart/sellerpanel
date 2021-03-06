

$(document).ready(function() {

  $('#dt_table').dataTable( {

    "language": {

      "decimal": ".",

      "thousands": ","

    }

  } );

} );

$('#button').click(function () {

  $("input[type='file']").trigger('click');

});



$("input[type='file']").change(function () {

  $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))

});



var substringMatcher = function(strs) {

    return function findMatches(q, cb) {

      var matches, substrRegex;



// an array that will be populated with substring matches

matches = [];



// regex used to determine if a string contains the substring `q`

substrRegex = new RegExp(q, 'i');



// iterate through the pool of strings and for any string that

// contains the substring `q`, add it to the `matches` array

$.each(strs, function(i, str) {

  if (substrRegex.test(str)) {

// the typeahead jQuery plugin expects suggestions to a

// JavaScript object, refer to typeahead docs for more info

matches.push({ value: str });

}

});



cb(matches);

};

}; 

var url = window.location;
$("ul.nav-sidebar li").removeClass('active');

// Will also work for relative and absolute hrefs
$('ul.nav-sidebar li a').filter(function() {
    return this.href == url;
}).parent().addClass('active');

