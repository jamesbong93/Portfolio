var tour={
	id:'hello-hopscotch',
	steps:[
	{
		target:'step-0',
		title:'Lorem ipsum dolor sit',
		content:'Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
		placement:'top',
		xOffset:'center',
		arrowOffset:'center'
	},
	{
		target:'step-1',
		title:'Aenean massa',
		content:'Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
		placement:'bottom',
		xOffset:'center',
		arrowOffset:'center'
    },
	{
		target:'step-2',
		title:'Donec pede justo',
		content:'Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.',
		placement:'top',
		xOffset:'center',
		arrowOffset:'center'
	},
	{
		target:'step-3',
		title:'Vivamus elementum semper nisi',
		content:'Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.',
		placement:'top',
		xOffset:'center',
		arrowOffset:'center'
	}
	],
	showPrevButton:true,
	scrollTopMargin:100
},
addClickListener=function(el,fn){
	if(el.addEventListener){
		el.addEventListener('click',fn,false);
	}
	else{el.attachEvent('onclick',fn);} 
},
init=function(){
	var calloutId='startTourCallout',
		mgr=hopscotch.getCalloutManager(),
		state=hopscotch.getState();
	
	for(var i=0;i<tour.steps.length;i++){
		$('#step-'+i).removeClass("tour-highlight");
	}
	
	if(state && state.indexOf('hello-hopscotch:')===0){hopscotch.endTour(tour);}
		
	for(var i=0; i<tour.steps.length;i++){
		if(state=="hello-hopscotch:"+i){
			$('#'+tour.steps[i].target).addClass("tour-highlight");
		}
	}
	if(!hopscotch.isActive){
		mgr.removeAllCallouts();
		hopscotch.startTour(tour);
		$('#step-0').addClass("tour-highlight");
		$('#backdrop').addClass("tour-backdrop");
	}
};
init();