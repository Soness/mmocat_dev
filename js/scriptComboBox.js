var openCheckBox = function(event) {
	
	var count = $(this).parent().find("ul.comboBoxItems li").length;
	var height =  $(this).parent().find(".comboBoxItems li").first().height();
	
	var currText = $(event.currentTarget).html();
	var currID = $(event.currentTarget).attr('id');
	var selectedElement;
	var arrowImg;
	var itemsContainer;
	var rectangle;
	
	if ($(event.currentTarget).hasClass("selectedComboBoxItem"))
	{
		itemsContainer = $(event.currentTarget).parent().find("ul.comboBoxItems");
	}
	else if ($(event.currentTarget).hasClass("comboBoxItem"))
	{
		itemsContainer = $(event.currentTarget).parent();
	}
	
	arrowImg = itemsContainer.parent().find("img");
	selectedElement = itemsContainer.parent().find(".selectedComboBoxItem");
	rectangle = itemsContainer.parent().find(".rectangle");
	
	if (!itemsContainer.hasClass("openedCheckBox"))
	{
		itemsContainer.addClass("openedCheckBox");
		itemsContainer.css("height", count * height + "px");
		arrowImg.css("transform", "rotate(180deg)");
		rectangle.css("opacity", 1);
	}
	else 
	{
		itemsContainer.removeClass("openedCheckBox");
		itemsContainer.css("height", 0);
		arrowImg.css("transform", "rotate(0)");
		rectangle.css("opacity", 0);
	}	
	
	selectedElement.attr('id', currID);
	selectedElement.html(currText);

};

var initDropDowns = function() {
	
	$(".comboBox").each(function() {
		$(this).find(".selectedComboBoxItem").html($(this).find(".comboBoxItems").find("li").first().html());
		$(this).find(".selectedComboBoxItem").attr('id', $(this).find(".comboBoxItems").find("li").first().attr('id'));
	});
	
};
	
	
	

$(document).ready(function() {
	initDropDowns();
	$(".comboBox li").click(openCheckBox);
});