	jQuery(document).ready(function(){
		jQuery(document.body).on( "change", ".select_widget",function(){
			var id = jQuery(this).parent( "p" ).parent(".widget-content").next(".widget-id").val();
			console.log(id);
			var widget_id = id;
			var widget_default = {
				topscorers_widget 	: ["data-competition-id", "data-max-players"],
				assists_widget 		: ["data-competition-id", "data-max-players"],
				lineups_widget 		: ["data-match-id"],
				livescores_widget 	: ["data-type", "data-max-matches", "data-competition-id", "data-team-id"],
				leaguetable_widget 	: ["data-round-id", "data-max-rows", "data-team-id"],
				squadlist_widget	: ["data-team-id"],
				matchcentre_widget 	: [/*"data-match-id"*/"data-team-id"],
				teamstats_widget	: ["data-team-id", "data-competition-id"],
				playerstats_widget	: ["data-round-id", "data-team-id", "data-max-rows"],
				nextmatch_widget	: ["data-team-id"],
			};
			var widget = jQuery("#widget-"+widget_id+"-select_widget #select_widget").val();
			jQuery("#widget-"+widget_id+"-description .description_inner").hide();
			jQuery("#"+widget).show();
			var widgets = widget.replace(/_|-/g, "_");
			console.log(widgets);
			jQuery("."+widget_id+"parimeters").hide();
			console.log(widget_default[widgets]);
			widget_default[widgets].forEach(function(unique) {
				console.log("#widget-"+widget_id+"-"+unique);
				jQuery("#widget-"+widget_id+"-"+unique).show();
			});
		});
	});