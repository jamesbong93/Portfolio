<!DOCTYPE html>
<!--[if IEMobile 7 ]>    <html class="no-js iem7"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        
        <!-- Bootstrap -->
        <link href="<?php echo PATH; ?>css/bootstrap.min.css" rel="stylesheet">

        <!-- PictShare overwrites -->
        <link href="<?php echo PATH; ?>css/pictshare.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

		<!-- <meta name="description" content="Free image sharing, linking and tracking">
		<meta name="keywords" content="image, share, hosting, free">
		<meta name="robots" content="index, follow">
		<meta name="copyright" content="Haschek Solutions">
		<meta name="language" content="EN,DE">
		<meta name="author" content="Haschek Solutions">
		<meta name="distribution" content="global">
		<meta name="rating" content="general"> -->

        <style type="text/css">
        
            .btn-outline {
                background-color: transparent;
                color: inherit;
                transition: all .5s;
            }

            .btn-primary.btn-outline {
                color: #428bca;
                font-weight: bold;
                padding-right: 50px;
                padding-left: 50px;
            }
            .btn-primary.btn-outline.choose_btn{
                padding-right: 0;
                padding-left: 30px;
            }

            .btn-success.btn-outline {
                color: #5cb85c;
            }

            .btn-info.btn-outline {
                color: #5bc0de;
            }

            .btn-warning.btn-outline {
                color: #f0ad4e;
                font-weight: bold;
            }

            .btn-danger.btn-outline {
                color: #d9534f;
            }

            .btn-primary.btn-outline:hover,
            .btn-success.btn-outline:hover,
            .btn-info.btn-outline:hover,
            .btn-warning.btn-outline:hover,
            .btn-danger.btn-outline:hover {
                color: #fff;
            }
            input[type=file]{
                display: inline-block;
            } 

            .preview_pic{
                width: 20%;
            }

            .form-control{
                width: 40%;
            }


            


        </style>

    </HEAD>
    <BODY>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              
                <img alt="Brand" src="img/logo.png">
             
            </div>
          </div>
        </nav>
        
        <div class="container" id="headcontainer">
        <div class="row">
            <h1>图片上传系统</h1>
            
            <?php if($backBtn){
                echo '<div class="pull-right">';
                echo '<button class="btn btn-primary btn-lg" onclick="goBack()">返回</button>';    
                echo '</div>';
                }
            ?>
            <div class="">
                <div class="well">
                    <?php echo $content?>
                </div>
            </div>

        <footer class="footer">
          <div class="container-fluid">
            <p class="text-muted">Copyright © 通博 Online Entertainment. All Rights</p>
          </div>
        </footer>
        </div>


   

    
        <script type="text/javascript">

        // function copyToClipboard(element) {
        //   var $temp = $("<input>");
        //   $("body").append($temp);
        //   $temp.val($(element).text()).select();
        //   document.execCommand("copy");
        //   $temp.remove();
        // }

        // function ClipBoard() 
        // {
        // test.innerText = copytext.innerText;
        // Copied = test.createTextRange();
        // Copied.execCommand("Copy");
        // }

       
      
        
        
       

        // var i = 1;
        // while (i < 3) {
        // document.getElementById("copyButton_" + i).addEventListener("click", function() {
        // copyToClipboard(document.getElementById("copyTarget_" + i));
        // });
        // i++;
        // }
        
        // function copyToClipboard(elem) {
        //       // create hidden text element, if it doesn't already exist
        //     var targetId = "_hiddenCopyText_";
        //     var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
        //     var origSelectionStart, origSelectionEnd;
        //     if (isInput) {
        //         // can just use the original source element for the selection and copy
        //         target = elem;
        //         origSelectionStart = elem.selectionStart;
        //         origSelectionEnd = elem.selectionEnd;
        //     } else {
        //         // must use a temporary form element for the selection and copy
        //         target = document.getElementById(targetId);
        //         if (!target) {
        //             var target = document.createElement("textarea");
        //             target.style.position = "absolute";
        //             target.style.left = "-9999px";
        //             target.style.top = "0";
        //             target.id = targetId;
        //             document.body.appendChild(target);
        //         }
        //         target.textContent = elem.textContent;
        //     }
        //     // select the content
        //     var currentFocus = document.activeElement;
        //     target.focus();
        //     target.setSelectionRange(0, target.value.length);
            
        //     // copy the selection
        //     var succeed;
        //     try {
        //           succeed = document.execCommand("copy");
        //     } catch(e) {
        //         succeed = false;
        //     }
        //     // restore original focus
        //     if (currentFocus && typeof currentFocus.focus === "function") {
        //         currentFocus.focus();
        //     }
            
        //     if (isInput) {
        //         // restore prior selection
        //         elem.setSelectionRange(origSelectionStart, origSelectionEnd);
        //     } else {
        //         // clear temporary content
        //         target.textContent = "";
        //     }
        //     return succeed;
        // }

        function goBack() {
            window.history.back();
        }

        </script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo PATH; ?>js/bootstrap.min.js"></script>

        
    </BODY>

</HTML>
