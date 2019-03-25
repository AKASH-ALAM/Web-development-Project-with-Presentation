/*
	* eakroko.js - Copyright 2013 by Ernst-Andreas Krokowski
	* Framework for themeforest themes

	* Date: 2013-01-01
	*/
	(function( $ ){
		$.fn.retina = function(retina_part) {
		// Set default retina file part to '-2x'
		// Eg. some_image.jpg will become some_image-2x.jpg
		var settings = {'retina_part': '-2x'};
		if(retina_part) jQuery.extend(settings, { 'retina_part': retina_part });
		if(window.devicePixelRatio >= 2) {
			this.each(function(index, element) {
				if(!$(element).attr('src')) return;

				var checkForRetina = new RegExp("(.+)("+settings['retina_part']+"\\.\\w{3,4})");
				if(checkForRetina.test($(element).attr('src'))) return;

				var new_image_src = $(element).attr('src').replace(/(.+)(\.\w{3,4})$/, "$1"+ settings['retina_part'] +"$2");
				$.ajax({url: new_image_src, type: "HEAD", success: function() {
					$(element).attr('src', new_image_src);
				}});
			});
		}
		return this;
	}
})( jQuery );
$(document).ready(function() {
	var mobile = false,
	tooltipOnlyForDesktop = true,
	notifyActivatedSelector = 'button-active';

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		mobile = true;
	}

	// Round charts (easypie)
	if($(".chart").length > 0)
	{
		$(".chart").each(function(){
			var color = "#881302",
			el = $(this);
			if(el.attr('data-color'))
			{
				color = el.attr('data-color');
			}
			else
			{
				if(parseInt(el.attr("data-percent")) <= 25)
				{
					color = "#046114";
				}
				else if(parseInt(el.attr("data-percent")) > 25 && parseInt(el.attr("data-percent")) < 75)
				{
					color = "#dfc864";
				}
			}
			el.easyPieChart({
				animate: 1000,
				barColor: color,
				lineWidth: 5,
				size: 110
			});
		});
	}

	// Calendar (fullcalendar)
	if($('.calendar').length > 0)
	{
		$('.calendar').fullCalendar({
			header: {
				left: '',
				center: 'prev,title,next',
				right: 'month,agendaWeek,agendaDay,today'
			},
			buttonText:{
				today:'Today'
			},
			editable: true
		});
		$(".fc-button-effect").remove();
		$(".fc-button-next .fc-button-content").html("<i class='icon-chevron-right'></i>");
		$(".fc-button-prev .fc-button-content").html("<i class='icon-chevron-left'></i>");
		$(".fc-button-today").addClass('fc-corner-right');
		$(".fc-button-prev").addClass('fc-corner-left');
	}

	// Tooltips (only for desktop) (bootstrap tooltips)
	if(tooltipOnlyForDesktop)
	{
		if(!mobile)
		{
			$('[rel=tooltip]').tooltip();
		}
	}
	

	// Notifications
	$(".notify").click(function(){
		var el = $(this);
		var title = el.attr('data-notify-title'),
		message = el.attr('data-notify-message'),
		time = el.attr('data-notify-time'),
		sticky = el.attr('data-notify-sticky'),
		overlay = el.attr('data-notify-overlay');

		$.gritter.add({
			title: 	(typeof title !== 'undefined') ? title : 'Message - Head',
			text: 	(typeof message !== 'undefined') ? message : 'Body',
			image: 	(typeof image !== 'undefined') ? image : null,
			sticky: (typeof sticky !== 'undefined') ? sticky : false,
			time: 	(typeof time !== 'undefined') ? time : 3000
		});
	});

	// masked input
	if($('.mask_date').length > 0){
		$(".mask_date").mask("9999/99/99");	
	}
	if($('.mask_phone').length > 0){
		$(".mask_phone").mask("(999) 999-9999");
	}
	if($('.mask_serialNumber').length > 0){
		$(".mask_serialNumber").mask("9999-9999-99");	
	}
	if($('.mask_productNumber').length > 0){
		$(".mask_productNumber").mask("aaa-9999-a");	
	}
	// tag-input
	if($(".tagsinput").length > 0){
		$('.tagsinput').tagsInput({width:'auto', height:'auto'});
	}

	// datepicker
	if($('.datepick').length > 0){
		$('.datepick').datepicker();
	}
	// timepicker
	if($('.timepick').length > 0){
		$('.timepick').timepicker({
			defaultTime: 'current',
			minuteStep: 1,
			disableFocus: true,
			template: 'dropdown'
		});
	}
	// colorpicker
	if($('.colorpick').length > 0){
		$('.colorpick').colorpicker();	
	}
	// uniform
	if($('.uniform-me').length > 0){
		$('.uniform-me').uniform({
			radioClass : 'uni-radio',
			buttonClass : 'uni-button'
		});
	}
	// Chosen (chosen)
	if($('.chosen-select').length > 0)
	{
		$('.chosen-select').each(function(){
			var el = $(this);
			var search = (el.attr("data-nosearch") === "true") ? true : false,
			opt = {};
			if(search) opt.disable_search_threshold = 9999999;
			el.chosen(opt);
		});
	}

	// multi-select
	if($('.multiselect').length > 0)
	{
		$(".multiselect").each(function(){
			var el = $(this);
			var selectableHeader = el.attr('data-selectableheader'),
			selectionHeader  = el.attr('data-selectionheader');
			if(selectableHeader != undefined)
			{
				selectableHeader = "<div class='multi-custom-header'>"+selectableHeader+"</div>";
			}
			if(selectionHeader != undefined)
			{
				selectionHeader = "<div class='multi-custom-header'>"+selectionHeader+"</div>";	
			}
			el.multiSelect({
				selectionHeader : selectionHeader,
				selectableHeader : selectableHeader
			});
		});
	}

	// spinner
	if($('.spinner').length > 0){
		$('.spinner').spinner();
	}

	// dynatree
	if($(".filetree").length > 0){
		$(".filetree").each(function(){
			var el = $(this),
			opt = {};
			opt.debugLevel = 0;
			if(el.hasClass("filetree-callbacks")){
				opt.onActivate = function(node){
					console.log(node.data);
					$(".activeFolder").text(node.data.title);
					$(".additionalInformation").html("<ul style='margin-bottom:0;'><li>Key: "+node.data.key+"</li><li>is folder: "+node.data.isFolder+"</li></ul>");
				};
			}
			if(el.hasClass("filetree-checkboxes")){
				opt.checkbox = true;

				opt.onSelect = function(select, node){
					var selNodes = node.tree.getSelectedNodes();
					var selKeys = $.map(selNodes, function(node){
						return "[" + node.data.key + "]: '" + node.data.title + "'";
					});
					$(".checkboxSelect").text(selKeys.join(", "));
				};
			}

			el.dynatree(opt);
		});
	}

	if($(".colorbox-image").length > 0){
		$(".colorbox-image").colorbox({
			maxWidth: "90%",
			maxHeight: "90%",
			rel: $(this).attr("rel")
		});
	}

	if($("#user").length > 0){
		//ajax mocks
		$.mockjaxSettings.responseTime = 500; 

		$.mockjax({
			url: '/post',
			response: function(settings) {
			}
		});

		$.mockjax({
			url: '/error',
			status: 400,
			statusText: 'Bad Request',
			response: function(settings) {
				this.responseText = 'Please input correct value'; 
			}        
		});
		
		$.mockjax({
			url: '/status',
			status: 500,
			response: function(settings) {
				this.responseText = 'Internal Server Error';
			}        
		});
		
		$.mockjax({
			url: '/groups',
			response: function(settings) {
				this.responseText = [ 
				{value: 0, text: 'Guest'},
				{value: 1, text: 'Service'},
				{value: 2, text: 'Customer'},
				{value: 3, text: 'Operator'},
				{value: 4, text: 'Support'},
				{value: 5, text: 'Admin'}
				];
			}        
		});
	}

	// PlUpload
	if($('.plupload').length > 0){
		$('.plupload').pluploadQueue({
			runtimes : 'html5,gears,flash,silverlight,browserplus',
			url : 'js/plupload/upload.php',
			max_file_size : '10mb',
			chunk_size : '1mb',
			unique_names : true,
			resize : {width : 320, height : 240, quality : 90},
			filters : [
			{title : "Image files", extensions : "jpg,gif,png"},
			{title : "Zip files", extensions : "zip"}
			],
			flash_swf_url : 'js/plupload/plupload.flash.swf',
			silverlight_xap_url : 'js/plupload/plupload.silverlight.xap'
		});
		$(".plupload_header").remove();
		$(".plupload_progress_container").addClass("progress").addClass('progress-striped');
		$(".plupload_progress_bar").addClass("bar");
		$(".plupload_button").each(function(){
			if($(this).hasClass("plupload_add")){
				$(this).attr("class", 'btn pl_add btn-primary').html("<i class='icon-plus-sign'></i> "+$(this).html());
			} else {
				$(this).attr("class", 'btn pl_start btn-success').html("<i class='icon-cloud-upload'></i> "+$(this).html());
			}
		});
	}

	// Wizard
	if($(".form-wizard").length > 0){
		$(".form-wizard").formwizard({ 
			formPluginEnabled: true,
			validationEnabled: true,
			focusFirstInput : false,
			disableUIStyles:true,
			validationOptions: {
				errorElement:'span',
				errorClass: 'help-block error',
				errorPlacement:function(error, element){
					element.parents('.controls').append(error);
				},
				highlight: function(label) {
					$(label).closest('.control-group').removeClass('error success').addClass('error');
				},
				success: function(label) {
					label.addClass('valid').closest('.control-group').removeClass('error success').addClass('success');
				}
			},
			formOptions :{
				success: function(){
				},
				beforeSubmit: function(){
				},
				dataType: 'json',
				resetForm: true
			}	
		});
	}

	// Validation
	if($('.form-validate').length > 0)
	{
		$('.form-validate').each(function(){
			var id = $(this).attr('id');
			$("#"+id).validate({
				errorElement:'span',
				errorClass: 'help-block error',
				errorPlacement:function(error, element){
					element.parents('.controls').append(error);
				},
				highlight: function(label) {
					$(label).closest('.control-group').removeClass('error success').addClass('error');
				},
				success: function(label) {
					label.addClass('valid').closest('.control-group').removeClass('error success').addClass('success');
				}
			});
		});
	}

	// dataTables
	if($('.dataTable').length > 0){
		$('.dataTable').each(function(){
			var opt = {
				"sPaginationType": "full_numbers",
				"oLanguage":{
					"sSearch": "<span>Search:</span> ",
					"sInfo": "Showing <span>_START_</span> to <span>_END_</span> of <span>_TOTAL_</span> entries",
					"sLengthMenu": "_MENU_ <span>entries per page</span>"
				}
			};
			if($(this).hasClass("dataTable-noheader")){
				opt.bFilter = false;
				opt.bLengthChange = false;
			}
			if($(this).hasClass("dataTable-nofooter")){
				opt.bInfo = false;
				opt.bPaginate = false;
			}
			if($(this).hasClass("dataTable-nosort")){
				var column = $(this).data('nosort');
				column = column.split(',');
				for (var i = 0; i < column.length; i++) {
					column[i] = parseInt(column[i]);
				};
				opt.aoColumnDefs =  [
				{ 'bSortable': false, 'aTargets': column }
				];
			}
			if($(this).hasClass("dataTable-scroll-x")){
				opt.sScrollX = "100%";
				opt.bScrollCollapse = true;
			}
			if($(this).hasClass("dataTable-scroll-y")){
				opt.sScrollY = "300px";
				opt.bPaginate = false;
				opt.bScrollCollapse = true;
			}
			if($(this).hasClass("dataTable-reorder")){
				opt.sDom = "Rlfrtip";
			}
			if($(this).hasClass("dataTable-colvis")){
				opt.sDom = 'C<"clear">lfrtip';
				opt.oColVis = {
					"buttonText": "Change columns <i class='icon-angle-down'></i>"
				};
			}
			if($(this).hasClass('dataTable-tools')){
				opt.sDom= 'T<"clear">lfrtip';
				opt.oTableTools = {
					"sSwfPath": "js/plugins/datatable/swf/copy_csv_xls_pdf.swf"
				};
			}
			if($(this).hasClass("dataTable-scroller")){
				opt.sScrollY = "300px";
				opt.bDeferRender = true;
				opt.sDom = "frtiS";
				opt.sAjaxSource = "js/plugins/datatable/demo.txt";
			}
			var oTable = $(this).dataTable(opt);
			$('.dataTables_filter input').attr("placeholder", "Search here...");
			$(".dataTables_length select").wrap("<div class='input-mini'></div>").chosen({
				disable_search_threshold: 9999999
			});
			if($(this).hasClass("dataTable-fixedcolumn")){
				new FixedColumns( oTable );
			}
		});
}

	// force correct width for chosen
	resize_chosen();

	// file_management
	if($('.file-manager').length > 0)
	{
		$('.file-manager').elfinder({
			url:'js/plugins/elfinder/php/connector.php'
		});
	}

	// slider
	if($('.slider').length > 0)
	{
		$(".slider").each(function(){
			var el = $(this);
			var min = parseInt(el.attr('data-min')),
			max = parseInt(el.attr('data-max')),
			step = parseInt(el.attr('data-step')),
			range = el.attr('data-range'),
			rangestart = parseInt(el.attr('data-rangestart')),
			rangestop = parseInt(el.attr('data-rangestop'));

			var opt = {
				min: min,
				max: max,
				step: step,
				slide: function( event, ui ) {
					el.find('.amount').html( ui.value );
				}
			};

			if(range !== undefined)
			{
				opt.range = true;
				opt.values = [rangestart, rangestop];
				opt.slide = function( event, ui ) {
					el.find('.amount').html( ui.values[0]+" - "+ui.values[1] );
				};
			}

			el.slider(opt);
			if(range !== undefined){
				var val = el.slider('values');
				el.find('.amount').html(val[0] + ' - ' + val[1]);
			} else {
				el.find('.amount').html(el.slider('value'));
			}
		});
	}

	if($(".ckeditor").length > 0){
		CKEDITOR.replace("ck");
	}

	$(".retina-ready").retina("@2x");
});

$(window).resize(function() {
	// chosen resize bug
	resize_chosen();
});

function resize_chosen(){
	$('.chzn-container').each(function() {
		var el = $(this);
		el.css('width', el.parent().width()+'px');
		el.find(".chzn-drop").css('width', (el.parent().width()-2)+'px');
		el.find(".chzn-search input").css('width', (el.parent().width()-37)+'px');
	});
}


