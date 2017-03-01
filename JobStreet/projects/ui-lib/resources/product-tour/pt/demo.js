/* globals hopscotch: false */

/* ============ */
/* EXAMPLE TOUR */
/* ============ */
var tour = {
  id: 'hello-hopscotch',
  steps: [
    {
      target: 'slide_0',
      title: 'this is volunteering title with long length',
      content: 'title shown here',
      placement: 'top',
      xOffset: 'center',
      arrowOffset: 'center'
    }/*,
	{
      target: 'slide_1',
      title: 'about volunteering',
      content: 'what is volunteer?',
      placement: 'top',
      xOffset: 'center',
      arrowOffset: 'center'
    },
	{
      target: 'slide_2',
      title: 'why volunteering',
      content: 'why volunteering?',
      placement: 'top',
      xOffset: 'center',
      arrowOffset: 'center'
    },
	{
      target: 'slide_3',
      title: 'Employer logo',
      content: 'featured employer',
      placement: 'top',
      xOffset: 'center',
      arrowOffset: 'center'
    },
	{
      target: 'slide_4',
      title: 'Join volunteering',
      content: 'dont hesitate to join us',
      placement: 'top',
      xOffset: 'center',
      arrowOffset: 'center'
    }*/
    
  ],
  showPrevButton: true,
  scrollTopMargin: 100
},

/* ========== */
/* TOUR SETUP */
/* ========== */
addClickListener = function(el, fn) {
  if (el.addEventListener) {
    el.addEventListener('click', fn, false);
	 
  }
  else {
    el.attachEvent('onclick', fn);
	
  }

  
},

init = function() {

  /*var startBtnId = 'startTourBtn',*/
      var calloutId = 'startTourCallout',
      mgr = hopscotch.getCalloutManager(),
      state = hopscotch.getState();
	  for(var i=0; i<tour.steps.length;i++){
	$('#slide_'+i).removeClass("tour-highlight");}
  if (state && state.indexOf('hello-hopscotch:') === 0) {
    // Already started the tour at some point!

	/* for(var i=0; i<tour.steps.length;i++){
		  if(state=="hello-hopscotch:"+i){
		 
	 $('#slide_'+i).removeClass("bootstro-highlight");
	  alert(i);
	}
  } */
  hopscotch.endTour(tour);
	

  }
 // else {
    // Looking at the page for the first(?) time.
/*     setTimeout(function() {
      mgr.createCallout({
        id: calloutId,
        target: startBtnId,
        placement: 'top',
        title: 'Take an example tour',
        content: 'Start by taking an example tour to see Hopscotch in action!',
        xOffset: 'center',
        arrowOffset: 'center',
        width: 240
      });
    }, 100); 
  } */
  
    for(var i=0; i<tour.steps.length;i++){
		  if(state=="hello-hopscotch:"+i){	
		   $('#'+tour.steps[i].target).addClass("tour-highlight");
		  }
	}
  
  

   /*addClickListener(document.getElementById(startBtnId), function() {
    if (!hopscotch.isActive) {
      mgr.removeAllCallouts();
      hopscotch.startTour(tour);
	  $('#slide_0').addClass("bootstro-highlight");
	  $('#backdropdiv').addClass("bootstro-backdrop");
	
    }
  });*/ 

 	

      if (!hopscotch.isActive) {
      mgr.removeAllCallouts();
      hopscotch.startTour(tour);
	  $('#slide_0').addClass("tour-highlight");
	  $('#backdropdiv').addClass("tour-backdrop");
	
    }
  
};



init();


