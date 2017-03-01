     mymodal.controller('SkillCtrl', function($scope){
        
        $scope.fed_skill = [{ 
              "title": "HTML5, CSS3, JavaScript",
              "img": "web"
        }, {
              "title": "Twitter Bootstrap",
              "img": "bootstrap"
         },  { 
             "title": "Angular.js",
              "img": "angularjs"
                }, { 
                     "title": "Jquery",
                     "img": "jquery"
                }, { 
                     "title": "SASS & LESS Preproccesors ",
                     "img": "sass_less"
                }, { 
                     "title": "Responsive Web Design",
                     "img": "responsive"
                }];
                
                $scope.bed_skill = [{ 
                     "title": "PHP",
                     "img": "php"
                 }, { 
                     "title": "Java",
                     "img": "java"
                 }, {
                     "title": "C++",
                     "img": "c++"
                 }];
          });


    mymodal.controller('ProjectCtrl', function($scope) {

        $scope.projects = [{
            "id": "portfolioModal1",
            "name": "Callarocket.com",
            "type": "On-demand delivery service",
            "content": "Callarocket.com is on-demand delivery service,you can get anything you want in the city delivered in minutes.Delivery team is always on the road to ensure fast delivery to your doorstep and enabling you to get anything you want delivered within an hour.",
            "img": "callarocket"
        }];
               
    });