var circleSeparator = "<img src='icon/Oval4.svg' alt='' class='circle'>";
var dashLineSeparator = "<img src='icon/verticalSeparator.svg' class='line'></div>";
var newSpan = "<span class='newSpan'>NEW</span>";


var makeSeparators = function(selector, separator, startIndex = 0, finalIndex = $(selector).length - 1) {
	$(selector).slice(startIndex, finalIndex).after(separator);
};

	$(document).ready(function() {
		
		makeSeparators("#support a", circleSeparator);
		makeSeparators("#preHeaderItems>div", dashLineSeparator, 0, $("#inner_pre_header div").length - 3);
		
		
		$(".hot").append(newSpan);
		
});









