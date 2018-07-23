var openDropDown = function(event) {
	
	var count = $(this).parent().find("li").length;
	var height =  $(this).parent().find("li").first().height();
	
	var arrowImg;
	var itemsContainer;
	var rectangle;
	
	itemsContainer = $(event.currentTarget).parent();
	
	if (!itemsContainer.hasClass("openedCheckBox"))
	{
		itemsContainer.addClass("openedCheckBox");
		itemsContainer.css("height", count * height + "px");
	}
	else 
	{
		itemsContainer.removeClass("openedCheckBox");
		itemsContainer.css("height", height);
	}	

	console.log(itemsContainer.attr('class'));
};

	
	
	

$(document).ready(function() {
	$(".dropDown li").click(openDropDown);
});