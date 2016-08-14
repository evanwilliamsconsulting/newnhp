$(document).ready(function()
{
	var theTextAreaId;
	var theWordageId;
	window_info = ({ "width" : $(window).width(), "height" : $(window).height()});
	$("#floats").hide();
	$("#dialog").hide();
/*
	$.ajax({
		type:"POST",
		data:window_info,
		url:"index/setsize",
		success:function(data) {
			//alert(data);
		}
	});
*/
	clickLogin = function()
	{
		$.ajax({
			type:"POST",
			url:"auth/login",
			success: function(data) {
				$("#hidden").html(data);
			}
		});
	}
	wordageChangeFunc = function()
	{
		$.ajax({
			type:"POST",
			data: 
				{
				'id':theWordageId,
				'thetext': $("#wordage-edit-textarea").val()
			}, 
			url:"/wordage/change",
			success: function(data) {
				//alert(data);
			}
		});
	}
	clickPictureItem = function(pictureitemid)
        {
	   thePictureId = pictureitemid;
	   $.ajax({
		type:"POST",
		url:"/picture/edit?id=" + pictureitemid,
		success: function(data) {
		var objJSON = JSON.parse(data);
		var thePictureText = objJSON.view	
		$("#floats").show();
		var theId = "#picture";
		$(theId).html(thePictureText);
		}
	    });
	}
	clickWordageItemText = function(wordagetextid)
	{
		theWordageId = wordagetextid;
		$.ajax({
			type:"POST",
			url:"/wordage/edit?id=" + wordagetextid,
			success: function(data) {
				var objJSON = JSON.parse(data);
				var theId = "#wordage";
				var theWordageText = objJSON.view;
				theTextAreaId = theId
				$("#floats").show();
				$(theId).html(theWordageText);
 				tinymce.init({
            				'selector': '#wordage-edit-textarea',
            				'plugins' : 'insertdatetime,link,image',
            				'theme' : 'modern',
            				'theme__layout_manager' : 'SimpleLayout',
            				'theme__buttons1' : 'backcolor, forecolor, |, bold, underline, strikethrough, |, numlist, bullist, charmap, |, undo, redo, |, anchor, link, tvlink, unlink',
            				'theme__buttons2' : '',
            				'theme__buttons3' : ''
        			});
			}
		});
	}
	closeEditWordage = function()
        {
	    $("#dialog").show();
	    var dlg = $('#dialog').dialog({
           	modal: false,
            	draggable: false,
            	position: 'center',
            	zIndex: 99999,  // Above the overlay
            	width: 370,
            	title: 'Content Block Editor',
            	closeText: '',
            	open: function () {
               		$('body').css('overflow', 'hidden');
                	if ($.browser.msie) { $('html').css('overflow', 'hidden'); } $('<div>').attr('id', 'loader').appendTo('body').show();
            	},
            	close: function () { $('body').css('overflow', 'auto'); if ($.browser.msie) { $('html').css('overflow', 'auto'); } $('#loader').remove(); },
            	buttons: {
               		'Save': function () {
                    		tinyMCE.getInstanceById(theWordageText).remove();
                    		$('.EditLink').show();
                    		$(this).dialog('close');
                	},
                	'Cancel': function () {
                    		tinyMCE.getInstanceById(theWordageText).remove();
                    		$('.EditLink').show();
                    		$(this).dialog('close');
                	}
		}
            	}).parent();
        }
});
