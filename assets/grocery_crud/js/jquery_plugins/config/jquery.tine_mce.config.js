	$(function() {
		var tinymce_path = default_texteditor_path+'/tiny_mce/';
	 
		var tinymce_options = {

				// Location of TinyMCE script
				script_url : tinymce_path +"tinymce.min.js",
				
				// General options
				theme : "modern",
                                
				//plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",
language : 'ru',
				plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste moxiemanager"
    ],
    toolbar: " undo redo | insertfile  link | image | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ",

				/*
				// Example content CSS (should be your site CSS)
				content_css : "css/content.css",
				*/
				// Drop lists for link/image/media/template dialogs
				template_external_list_url : tinymce_path +"lists/template_list.js",
				external_link_list_url : tinymce_path +"lists/link_list.js",
				external_image_list_url : tinymce_path +"lists/image_list.js",
				media_external_list_url : tinymce_path +"lists/media_list.js",

				// Replace values for the template plugin
				template_replace_values : {
					username : "Some User",
					staffid : "991234"
				}
			};
		
		$('textarea.texteditor').tinymce(tinymce_options);
		
		var minimal_tinymce_options = $.extend({}, tinymce_options);
		minimal_tinymce_options.theme = "simple";
		
		$('textarea.mini-texteditor').tinymce(minimal_tinymce_options);
		
	});