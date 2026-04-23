
var local = {}; 
local.avatar = "https://image.flaticon.com/icons/png/128/149/149071.png";

var remote = {};
remote.avatar = "https://quickhelp.com.ng/quickie.png";

var variodo;

  
            
       function startMess(){
           
          variodo =  setInterval(function(){
                    queryBot("looping_john"); 
                 }, 1000);
                 console.log("start messenger");
       }
        
        
        function stopMess(){ 
           clearInterval(variodo); 
          console.log("stop messenger");
        }
                 


function replaceURLWithHTMLLinks(text) {
 var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
return text.replace(exp,"<a href='$1' target='_blank' >$1</a>"); } 

  var sw_mode = localStorage.getItem("sw_mode");
  var user = localStorage.getItem("user_session");
  var messenger_status = localStorage.getItem("messenger");
                 

var accessTokenEnglish = "48f91fb7d6d446038cb4949295725b20";
var accessTokenFrench = "48f91fb7d6d446038cb4949295725b20";
var baseUrl = "https://api.api.ai/v1/";

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=144445336126523";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function formatTime(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return strTime;
}            

function insertChat(who, text) {
    var control = "";
    var control2 = "";
    var date = formatTime(new Date());

    if (who == "local") {
        control = '<li class="self">' +
                    '<div class="avatar">' +
                        '<img src="'+local.avatar+'" draggable="false"/>' +
                    '</div>' +
                    '<div class="msg">' +
                        '<p>'+ text + '</p>' +
                        '<time>' + date + '</time>' +
                    '</div>' +
                  '</li>';
    } else {
        control = '<li class="other">' +
                    '<div class="avatarv">' +
                        '<img src="'+remote.avatar+'" draggable="false" width="50px" />' +
                    '</div>' +
                    '<div class="msg">' +
                        '<p>'+ text +'</p>' +
                        '<time>' + date + 
                        ' <span class="feedback">' +
                            '<i class="fa fa-thumbs-up" style="font-size: 16px; margin-left: 10px; cursor: pointer;color:#cfcfcf" ' +
                            'onclick="queryBot(\'correct\');this.style.color=\'blue\';"></i>' +
                            '<i class="fa fa-thumbs-down" style="font-size: 16px; margin-left: 10px; cursor: pointer;color:#cfcfcf" ' +
                            'onclick="queryBot(\'wrong\');this.style.color=\'red\';"></i>' +
                        '</span>' +
                        '</time>' +
                    '</div>' +
                  '</li>'; 
                  
        control2 = '<li class="other2">' +
                    '<div class="msg2">' +
                        '<p>'+ text +'</p>' +
                    '</div>' +                             
                  '</li>';
    }
    
    $("#messages").append(control);
    var objDiv = document.getElementById("messages");
    $("#messages2").append(control2);
    var objDiv2 = document.getElementById("messages2");
    objDiv.scrollTop = objDiv.scrollHeight;
    //objDiv2.scrollTop = objDiv2.scrollHeight;
}

// Function to handle thumbs up/down feedback


// Dummy queryBot function for testing
function queryBot(feedbackType) {
    console.log("Feedback sent to bot:", feedbackType);
    // Implement your bot logic here
}



// $("#chat-panel").on('click',function(){
//     $(".innerframe").toggle();
// });

// function resetChat(){
//     $("#messages").empty();
// }

 function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}



var latlong1 = readCookie('coordinates');
var checkcoodinates =  localStorage.getItem("coordinates");


 // if (latlong1==null) {
 // if(!window.location.hash) {
 //  window.location = window.location + '#home';
//    window.location.reload();
 //  }
//}






// var latlong = '7.516518,4.5285613';
       
$(".textarea").on("keyup", function(e){
    if (e.which == 13){
        var text = $(this).val();
        if (text !== ""){
            insertChat("local", text);              
            $(this).val('');
            //////////////////////get words for geolocation  
            if ((text.indexOf("geolocate") >= 0) || (text.indexOf("where are my") >= 0) || (text.indexOf("new business query") >= 0)  || (text.indexOf("where am I") >= 0) || (text.indexOf("where is this") >= 0) ||(text.indexOf("locate") >= 0) || (text.indexOf("close by") >= 0) || (text.indexOf("within reach") >= 0) || (text.indexOf("neighbourhood") >= 0)|| (text.indexOf("neighborhood") >= 0)|| (text.indexOf("nearby") >= 0)|| (text.indexOf("around me") >= 0) || (text.indexOf("take me there from my location") >= 0)|| (text.indexOf("take me there") >= 0)){
            if (checkcoodinates !== null) {queryBot(text+ "(" +checkcoodinates +")" );} else {
            queryBot(text);}  } else {queryBot(text); }
        }
    }
});






//resetChat();
 
function randomi() {
 var rantext = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
   for (var i = 0; i < 16; i++)
    rantext += possible.charAt(Math.floor(Math.random() * possible.length));
    return rantext;
}

var check_session = localStorage.getItem("session_inout");
var user_session = localStorage.getItem("user_session");
var session_user = localStorage.getItem("session_user");
var session_marker = "0101L";

var check_connected = localStorage.getItem("connection");





 var json_data = {          "user_session": user_session,
                             "brand": "working"
                                   };  
    
    
            $.ajax({
                type: "POST",
                url: "https://quickhelp.com.ng/check_session.php",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                data: JSON.stringify(json_data),
                success: function (data) {
           
          var result_time = data.speech;
          //alert(data.speech);
          
          
        
          
          if (check_session == "in"){
              
                var timestamp = data.speech;
              
          } else {
    
    var timestamp = new Date();
    localStorage.setItem("session_user",timestamp);
    
}

          
                         },
                error: ""
            });   
            
   


function queryVacant(text) {
    
    
    var timestamp = session_user;
            //ctoken = "12345;"
            var json_data = {
                              "sessionid": timestamp,
                             "vary": text,
                             "brand": sw_mode, 
                             "user": user
                                   };  
                                   
              $.ajax({
                type: "POST",
                url: "quick_widget2.php",
                contentType: "application/json; charset=utf-8",
                                headers: {
    'Access-Control-Allow-Credentials' : true,
    'Access-Control-Allow-Origin':'*',
    'Access-Control-Allow-Methods':'POST',
    'Access-Control-Allow-Headers':'application/json',
  },
                dataType: "json",
                data: JSON.stringify(json_data),
                success: function(data) {
     
               //var real_speech =  data.speech;
         
                    
                },
                error: function() {
                    
                }
            });
    
    
    
}


function queryBot(text) {
    
    
                   if ((text.indexOf("talk") >= 0) || (text.indexOf("speak out") >= 0)|| (text.indexOf("start talking") >= 0)|| (text.indexOf("take voice command") >= 0)|| (text.indexOf("speak out") >= 0)) {
                         localStorage.setItem("talker", "talkertive1");} 
                         
                    if ((text.indexOf("stop talking") >= 0) || (text.indexOf("quit talking") >= 0)|| (text.indexOf("quit talking") >= 0)|| (text.indexOf("keep quiet") >= 0)|| (text.indexOf("stop speech") >= 0)) { 
                         localStorage.setItem("talker", "talkertive0");}
                  
    
    
                    if ((text.indexOf("speak english") >= 0) )  {  
                    localStorage.setItem("lingua", "english");} 
                    
                    if (text.indexOf("speak french") >= 0)  {  
                    localStorage.setItem("lingua", "french");} 
                    
                    var checktalk = localStorage.getItem("talker");
                    
                    var check_sw_start = localStorage.getItem("sw_mode_chat");
                    
                    var checklanguage = localStorage.getItem("lingua");
                     
                   var checkcoodinates =  localStorage.getItem("coordinates");
                    
                    if (checklanguage != "french") { 
                
  
  
  
  ///////////////////////////////////////////////////////////////switch to mtn
  
  
 

 
  if  ((sw_mode !== null)) {//////switching to brands
   
                         
        if ( typeof text !== 'undefined'){
                        
           
            
            if (messenger_status == "active"){
                startMess();
            }
            //insertChat("remote","this is messenger. Who do you");///real response
            
            
         
                        
                    
                 //insertChat("remote",text);
                  $("img#loader2").hide();  // hide it again
                      
                       //var timestamp = new Date();           
            ////////////////////////////////////////////////////////////////////
var check_session = localStorage.getItem("session_inout");
var user_session = localStorage.getItem("user_session");
var session_user = localStorage.getItem("session_user");
var session_marker = "0101L";   

var timestamp = session_user;
            //ctoken = "12345;"
            var json_data = {
                              "sessionid": timestamp,
                             "vary": text,
                             "brand": sw_mode,
                             "user": user_session
                                   };  
                                   
              $.ajax({
                type: "POST",
                url: "quick_widget2.php",
                contentType: "application/json; charset=utf-8",
                headers: {
    'Access-Control-Allow-Credentials' : true,
    'Access-Control-Allow-Origin':'*',
    'Access-Control-Allow-Methods':'POST',
    'Access-Control-Allow-Headers':'application/json',
  },
                dataType: "json",
                data: JSON.stringify(json_data),
                success: function(data) {
                    
 if (data.speech.indexOf("news source") === -1){
 
 function replaceURLWithHTMLLinks(text) {
            var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
                return text.replace(exp,"<a href='$1' target='_blank' >$1</a>"); } 
                
 } else {
     
     
      function replaceURLWithHTMLLinks(text) {
        var real_speech =  data.speech;
         return  real_speech;
 }
 
 }
                
function replacewithbuttons(text) {
            var exp =/button::(.*)::/ig;
            // var exp =/button::([\S\s]*)::/ig;
             var summer ='<input type="button" class="buttono_red" id="'+holdier+'" value="$1" alt="$1"' + 'onclick="rollout()"' +  '><p id="'+holdier+'"></p>';
               // uncle = str.match
                return text.replace(exp,summer); 
             }
             
function replacewithimages(text) {
            var shower  = String(data.speech.match(/image::(.*)::/ig)).replace("image::", "").replace("::", "");
            // var exp =/button::([\S\s]*)::/ig;
             var summer ='<img src='+'https://quickhelp.com.ng/'+shower+ '.png'+' alt=\"image\" width=\"100%\">';
               // uncle = str.match
                return text.replace(shower,summer); 
             }               



 if (data.speech.indexOf("button::") >= 0){

          uncle2  = String(data.speech.match(/button::(.*)::/ig)).replace("button::", "").replace("::", ""); 
          
          var real_with_but =  replacewithbuttons(data.speech); 
         var real_speech =  replaceURLWithHTMLLinks(real_with_but);
          insertChat("remote",real_speech);
          
          
 } else if (data.speech.indexOf("image::") >= 0){     
     
         var shower  = String(data.speech.match(/image::(.*)::/ig)).replace("image::", "").replace("::", "");
            // var exp =/button::([\S\s]*)::/ig;
             var summer ='<img src='+'https://quickhelp.com.ng/'+shower+ '.png'+' alt="image" width ="100%">';
               // uncle = str.match
                var real_speech = data.speech.replace(shower,summer).replace("image::", "").replace("::", "");
                    insertChat("remote",real_speech);
                    
} else if (data.speech.indexOf("flow::") >= 0) {
    // Extract the flow target safely
    var match = data.speech.match(/flow::\s*([^:]+)\s*::/i);
    if (!match) {
        console.log("Flow tag found but regex failed");
        return;
    }
   
    var shower = match[1].trim(); // the next step name
    var real_speech = data.speech.replace(/flow::.*?::/i, "").trim(); // clean text
   
    // ALWAYS show the message if there is text
    // If empty, do NOT insert anything (no empty bubble)
    if (real_speech !== "") {
        insertChat("remote", real_speech);
    }
   
    // Natural reading time based on the text that was shown
    var wordCount = real_speech.split(/\s+/).length || 1;
    var readingTime = (wordCount * 267) + 1000;
   
    // Trigger the next flow
    setTimeout(function() {
        queryBot(shower + "|||" + real_speech + "|||" + text);
    }, readingTime);
}
  else if (data.speech.indexOf("video::") >= 0){    
     
         var shower  = String(data.speech.match(/video::(.*)::/ig)).replace("video::", "").replace("::", "");
            // var exp =/button::([\S\s]*)::/ig;
            
            
 var summer =  '<video height="250px" width="100%"  controls autoplay>  <source src='+'https://quickhelp.com.ng/'+shower+ '.mp4'+' type="video/mp4" >Your browser does not support the video tag.</video>';
               // uncle = str.match
                var real_speech = data.speech.replace(shower,summer).replace("video::", "").replace("::", "");
                    insertChat("remote",real_speech);                    
     
          
 }  else if (data.speech.indexOf("youtube::") >= 0){    
     
         var shower  = String(data.speech.match(/youtube::(.*)::/ig)).replace("youtube::", "").replace("::", "");
            // var exp =/button::([\S\s]*)::/ig;
            
            
 var summer =  '<iframe width="100%"  src="'+shower+'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
               // uncle = str.match
                var real_speech = data.speech.replace(shower,summer).replace("youtube::", "").replace("::", "");
                    insertChat("remote",real_speech);                    
     
          
 }  else {
     
          var real_speech =  replaceURLWithHTMLLinks(data.speech);
          
          
          if ((real_speech.indexOf("looping_john") >= 0) || (real_speech.indexOf("do_nothino") >= 0))  { 
              
                       return false;  
                         
                    } else {
          
          insertChat("remote",real_speech); 
          
                    }
     
 }
            
            
        
          
          
          
     
           
           ////////////////////
                    
                   
          //insertChat("remote",data.speech);
          //insertChat("remote",ctoken);
                 
                    
                    
                },
                error: function() {
                    
                    if (messenger_status == "inactive")  { 
                         
                          return false; 
                         
                    } else {
                        
                      insertChat("remote","I am sorry but I am realy trying hard to figure this out. It may be that you are no longer online?");
                       motivate();   
                    }
                    
                   
                }
            });
            
            
            ///////myCodeStarts                       
   
                    
                } 
    
    /////////////////voice recognision
    
    var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;   
    
 var  $speechInput,
      $recBtn,
      recognition,
      messageRecording = "Recording...",
      messageCouldntHear = "Sorry, I could not process that. Could you try again?",
      messageInternalError = "I heard that but sorry, I am still being trained in English, Yoruba, Igbo and Hausa. Kindly type all your request for now.",
      messageSorry = "I'm sorry, I don't have the answer to that yet.";

    $(document).ready(function() {
       localStorage.setItem("sw_mode","quicke");
        localStorage.setItem("sw_mode_chat","start");
        
      $speechInput = $("#speech");
      $recBtn = $("#rec");

      $speechInput.keypress(function(event) {
        if (event.which == 13) {
          event.preventDefault();
          send();
        }
      });
      $recBtn.on("click", function(event) {
        switchRecognition();
      });
     });

    function startRecognition() {
      recognition = new SpeechRecognition();
      recognition.continuous = true;
          recognition.interimResults = false;

      recognition.onstart = function(event) {
        respond(messageRecording);
        updateRec();
      };
      recognition.onresult = function(event) {
        recognition.onend = null;
        
        var text = "";
          for (var i = event.resultIndex; i < event.results.length; ++i) {
            text += event.results[i][0].transcript;
          }
          //queryBot(text);
          if (text !== ""){
            insertChat("local", text);              
            $(this).val('');
            //////////////////////get words for geolocation  
            if ((text.indexOf("geo locate") >= 0) || (text.indexOf("where are my") >= 0) || (text.indexOf("where am I") >= 0) || (text.indexOf("where is this") >= 0) ||(text.indexOf("locate") >= 0) || (text.indexOf("close by") >= 0) || (text.indexOf("within reach") >= 0) || (text.indexOf("neighbourhood") >= 0)|| (text.indexOf("neighborhood") >= 0)|| (text.indexOf("nearby") >= 0)|| (text.indexOf("around me") >= 0) || (text.indexOf("take me there from my location") >= 0)){
            if (latlong1 !== null) {queryBot(text+ "( "+latlong1 +" )" );} else {
            queryBot(text);}  } else {queryBot(text); }
        }
          setInput(text);
          //stopRecognition();
      };
      recognition.onend = function() {
        respond(messageCouldntHear);
        stopRecognition();
      };
      recognition.lang = "en-GB";
      recognition.start();
    }
  
    function stopRecognition() {
      if (recognition) {
          
        recognition.stop();
        recognition = null;
      }
      updateRec();
    }

    function switchRecognition() {
      if (recognition) {
        stopRecognition();
      } else {
        startRecognition();
      }
    }

    function setInput(text) {
      $speechInput.val(text);
      send();
    }

    function updateRec() {
      $recBtn.text(recognition ? "Stop" : "Speak");
    }


     
    


    //var text = $speechInput.val();
    //var text = "Hello";

    function send() {
        //queryBot(text);
       var json_data = {
                              "sessionid": timestamp,
                             "vary": text,
                             "brand": sw_mode
                                   };  
                                   
              $.ajax({
                type: "POST",
                url: "https://quickhelp.com.ng/quick_widget2.php",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                data: JSON.stringify(json_data),
                success: function(data) {
          prepareResponse(data);
           
        },
        error: function() {
          respond(text);
        }
      });
    }

    function prepareResponse(val) {
      var debugJSON = JSON.stringify(val, undefined, 2),
        spokenResponse = val.result.speech;

      respond(spokenResponse);
      debugRespond(debugJSON);
    }

    function debugRespond(val) {
      $("#response").text(val);
    }

    function respond(val) {
      if (val == "") {
        val = messageSorry;
      }

   if (val !== messageRecording) {
    var msg = new SpeechSynthesisUtterance();
    var voices = window.speechSynthesis.getVoices();
    msg.voiceURI = "native";
    msg.text1 = val;
    //msg.text1 = data.result.fulfillment.speech;
                    msg.text2 = msg.text1.split('<script>')[0];
                    msg.text = msg.text2.split('#')[0];
    msg.lang = "en-GB";
      window.speechSynthesis.speak(msg);
 }

      $("#spokenResponse").addClass("is-active").find(".spoken-response__text").html(val);
    }
  
  
var $element = $("#messages"), oldScrollValue = 0;

$element.on('scroll', function() {

    if ($element.scrollTop() > oldScrollValue ) {
          $('#downArrow').trigger('click');
    }else{
          $('#upArrow').trigger('click');
    }

    oldScrollValue = $element.scrollTop();

});
           
           
}     else {
    
    
   
            
  
  ////////////////////////////////////////////////////////switch to mtn ends
                
                
               
    
             $.ajax({
                type: "POST",
                url: baseUrl + "query?v=20150910",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                headers: {
                    "Authorization": "Bearer " + accessTokenEnglish
                },
                
                /////////////////////////////////
                
                data: JSON.stringify({ query: text, lang: "en", sessionId: timestamp}),
                
                 
                
                success: function(data) {
                    
                    
                    
                if ((data.result.fulfillment.speech.indexOf("@i") >= 0) ||(data.result.fulfillment.speech.indexOf("takeo") >= 0)||(data.result.fulfillment.speech.indexOf("listo") >= 0)||(data.result.fulfillment.speech.indexOf("whereo") >= 0) ||(data.result.fulfillment.speech.indexOf("againo") >= 0)||(data.result.fulfillment.speech.indexOf("nearbyo") >= 0)||(data.result.fulfillment.speech.indexOf("takeo2") >= 0)||(data.result.fulfillment.speech.indexOf("geoloco") >= 0)||(data.result.fulfillment.speech.indexOf("takeo3") >= 0)||(data.result.fulfillment.speech.indexOf("traffico") >= 0)||(data.result.fulfillment.speech.indexOf("getmedio") >= 0)||(data.result.fulfillment.speech.indexOf("airtor") >= 0)||(data.result.fulfillment.speech.indexOf("whosot") >= 0)||(data.result.fulfillment.speech.indexOf("newzo") >= 0)||(data.result.fulfillment.speech.indexOf("evento") >= 0)||(data.result.fulfillment.speech.indexOf("taxxo") >= 0)||(data.result.fulfillment.speech.indexOf("jobzo") >= 0)||(data.result.fulfillment.speech.indexOf("forgoi") >= 0)||(data.result.fulfillment.speech.indexOf("lgnoi") >= 0))  {}  
                    else {
                        
                    if (data.result.fulfillment.speech == "") { 
                        
                    queryBot("again");   
                    //insertChat("remote","Did not get that. Please try that again...");
                       
                   } else {      
                    var speech = data.result.fulfillment.speech;
                    //insertChat("remote",data.result.metadata.intentName);
                   }
                       
                    
                    var msg = new SpeechSynthesisUtterance();
                    msg.voiceURI = "native";
                    //msg.text = data.result.fulfillment.speech;
                    msg.text0 = jQuery('<p>' + data.result.fulfillment.speech + '</p>').text();
                    //msg.text1 = data.result.fulfillment.speech;
                    msg.text2 = msg.text0.split('<script>')[0];
                     msg.text12 =  msg.text2.split('localStorage.removeItem')[0];
                    msg.text13 =  msg.text12.split('localStorage.setItem')[0];
                    msg.text14 =  msg.text13.split('var cyb = localStorage.getItem(0)')[0];
                    msg.text15 =  msg.text14.split('queryBot')[0];
                    msg.text16 =  msg.text15.split('var getstate = localStorage.getItem')[0];
                    
                    
                    
                    
                    msg.text = msg.text16.split('function')[0];
                    
                   if (checktalk == "talkertive1") {   
                    msg.lang = "en-GB";
                    window.speechSynthesis.speak(msg) ; 
                  } 
                    
                    }
                    
                   
                    
                },
                error: function() {
                    insertChat("remote","I am sorry but I am realy trying hard to figure this out. Might be that you are no longer online?");
                     motivate();
                    
                }
            });
            
                    }
            
                       } else {
                           
                            
                
                
                
               
    
             $.ajax({
                type: "POST",
                url: baseUrl + "query?v=20150910",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                headers: {
                    "Authorization": "Bearer " + accessTokenFrench
                },
                
                
                
                data: JSON.stringify({ query: text, lang: "fr-FR", sessionId: timestamp}),
                
                 
                
                success: function(data) {
                    
                   
                    
                    if (checktalk == "talkertive1") {
                          
                         /////////condition on what is coming instead. if data.result.fulfillment.speech contains 0 or 1, then switch accordingly, 0 is no voice, 1 is with voice.
                         
                       //queryBot("How are you doing?");
                    
                     insertChat("remote",data.result.fulfillment.speech);
                    
                    var msg = new SpeechSynthesisUtterance();
                    msg.voiceURI = "native";
                    //msg.text = data.result.fulfillment.speech;
                    msg.text0 = jQuery('<p>' + data.result.fulfillment.speech + '</p>').text();
                    //msg.text1 = data.result.fulfillment.speech;
                    msg.text2 = msg.text0.split('<script>')[0];
                    msg.text = msg.text2.split('function')[0];
                    
                   msg.lang = "fr-FR";
                   
                   var synth = window.speechSynthesis;
                   var voices = synth.getVoices();
                   var utterThis = new SpeechSynthesisUtterance(data.result.fulfillment.speech);
 
  for(i = 0; i < voices.length ; i++) {
    
      utterThis.voice = voices[i];
   
  }
  utterThis.lang = 'fr-FR';
  synth.speak(utterThis);
 // data.result.fulfillment.speech.blur();
                   
                   
                   
                   
                   
                   
                  //  window.speechSynthesis.speak(msg) ; 
                    
                    
                    
                    
                    
                          
                      } 
                    
                    else {
                    
                    var speech = data.result.fulfillment.speech;
                    
                    var msg = new SpeechSynthesisUtterance();
                    msg.voiceURI = "native";
                    //msg.text = data.result.fulfillment.speech;
                    msg.text0 = jQuery('<p>' + data.result.fulfillment.speech + '</p>').text();
                    //msg.text1 = data.result.fulfillment.speech;
                    //msg.text2 = msg.text0.split('<script>')[0];
                    //msg.text = msg.text2.split('function')[0];
                    
                   //msg.lang = "en-GB";
                   //window.speechSynthesis.speak(msg) ; 
                    
                     
                    
                     }
                    
                },
                error: function() {
                    insertChat("remote","I am sorry but I am realy trying hard to figure this out. Might be that you are no longer online?");
                }
            });
            
                       
                           
                           
                           
                           
                       }
    }
    
    
 
 
    
    
    
 var accessToken = "48f91fb7d6d446038cb4949295725b20",
      baseUrl = "https://api.api.ai/v1/",
      $speechInput,
      $recBtn,
      recognition,
      messageRecording = "Recording...",
      messageCouldntHear = "Sorry, I could not process that. Could you try again?",
      messageInternalError = "I heard that but sorry, I am still being trained in English, Yoruba, Igbo and Hausa. Kindly type all your request for now.",
      messageSorry = "I'm sorry, I don't have the answer to that yet.";

    $(document).ready(function() {
      $speechInput = $("#speech");
      $recBtn = $("#rec");

      $speechInput.keypress(function(event) {
        if (event.which == 13) {
          event.preventDefault();
          send();
        }
      });
      $recBtn.on("click", function(event) {
        switchRecognition();
      });
     });

    function startRecognition() {
      recognition = new webkitSpeechRecognition();
      recognition.continuous = true;
          recognition.interimResults = false;

      recognition.onstart = function(event) {
        respond(messageRecording);
        updateRec();
      };
      recognition.onresult = function(event) {
        recognition.onend = null;
        
        var text = "";
          for (var i = event.resultIndex; i < event.results.length; ++i) {
            text += event.results[i][0].transcript;
          }
          //queryBot(text);
          if (text !== ""){
            insertChat("local", text);              
            $(this).val('');
            //////////////////////get words for geolocation  
            if ((text.indexOf("geo locate") >= 0) || (text.indexOf("where are my") >= 0) || (text.indexOf("where am I") >= 0) || (text.indexOf("where is this") >= 0) ||(text.indexOf("locate") >= 0) || (text.indexOf("close by") >= 0) || (text.indexOf("within reach") >= 0) || (text.indexOf("neighbourhood") >= 0)|| (text.indexOf("neighborhood") >= 0)|| (text.indexOf("nearby") >= 0)|| (text.indexOf("around me") >= 0) || (text.indexOf("take me there from my location") >= 0)){
            if (latlong1 !== null) {queryBot(text+ "( "+latlong1 +" )" );} else {
            queryBot(text);}  } else {queryBot(text); }
        }
          setInput(text);
          //stopRecognition();
      };
      recognition.onend = function() {
        respond(messageCouldntHear);
        stopRecognition();
      };
      recognition.lang = "en-GB";
      recognition.start();
    }
  
    function stopRecognition() {
      if (recognition) {
          
        recognition.stop();
        recognition = null;
      }
      updateRec();
    }

    function switchRecognition() {
      if (recognition) {
        stopRecognition();
      } else {
        startRecognition();
      }
    }

    function setInput(text) {
      $speechInput.val(text);
      send();
    }

    function updateRec() {
      $recBtn.text(recognition ? "Stop" : "Talk");
    }


     
    


    //var text = $speechInput.val();
    //var text = "Hello";

    function send() {
        //queryBot(text);
        $.ajax({
        type: "POST",
        url: baseUrl + "query",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        headers: {
          "Authorization": "Bearer " + accessTokenEnglish
        },
        data: JSON.stringify({query: text, lang: "en", sessionId:timestamp}),

        success: function(data) {
          prepareResponse(data);
           
        },
        error: function() {
          respond(text);
        }
      });
    }

    function prepareResponse(val) {
      var debugJSON = JSON.stringify(val, undefined, 2),
        spokenResponse = val.result.speech;

      respond(spokenResponse);
      debugRespond(debugJSON);
    }

    function debugRespond(val) {
      $("#response").text(val);
    }

    function respond(val) {
      if (val == "") {
        val = messageSorry;
      }

   if (val !== messageRecording) {
    var msg = new SpeechSynthesisUtterance();
    var voices = window.speechSynthesis.getVoices();
    msg.voiceURI = "native";
    msg.text1 = val;
    //msg.text1 = data.result.fulfillment.speech;
                    msg.text2 = msg.text1.split('<script>')[0];
                    msg.text = msg.text2.split('#')[0];
    msg.lang = "en-GB";
      window.speechSynthesis.speak(msg);
 }

      $("#spokenResponse").addClass("is-active").find(".spoken-response__text").html(val);
    }

function motivate() {
    var items = Array("It’s supposed to be hard. If it wasn’t hard, everyone would do it. The hard is what makes it great. – <strong> Jimmy Dugan, A League of Their Own</strong>",
"Success is not final, failure is not fatal: it is the courage to continue that counts – <strong> Winston Churchill, Prime Minister of Great Britain during World War II</strong>",
"	Be undeniably good. No marketing effort or social media buzzword can be a substitute for that – <strong> Anthony Volodkin, founder of Hype Machine Anthony Volodkin </strong>",
"	If your actions inspire others to dream more, learn more, do more and become more, you are a leader – <strong> John Quincy Adams,</strong>",
"	A dream does not become reality through magic; it takes sweat, determination and hard work – <strong> Colin Powell, US statesman and retired four-star General in the United States Army</strong>",
"	A man who dares to waste one hour of time has not discovered the value of life – <strong> Charles Darwin, English naturalist, geologist and biologist</strong>",
"	A person who is quietly confident makes the best leader – <strong> Fred Wilson, co-founder of Union Square Ventures </strong>",
"	A successful man is one who can lay a firm foundation with the bricks others have thrown at him – <strong> David Brinkley, newscaster for NBC and ABC</strong>",
"	A successful man is one who can lay a firm foundation with the bricks that other throw at him-- David Brinkley</strong>",
"	A year from now you may wish you had started today – <strong> Karen Lamb, author</strong>",
"	Accept responsibility for your life. Know that it is you who will get you where you want to go, no one else – <strong> Les Brown, American motivational speaker, author, and former politician</strong>",
"	After a while, you learn to ignore the names people call you and just trust who you are – <strong> Shrek, Shrek The Third</strong>",
"	All humans are entrepreneurs not because they should start companies but because the will to create is encoded in human DNA – <strong> Reid Hoffman, co-founder of LinkedIn </strong>",
"	All progress takes place outside the comfort zone-- Michael John Bobak</strong>",
"	All we have to decide is what to do with the time that is given to us – <strong> Gandalf, Lord of the Rings: The Fellowship of the Ring</strong>",
"	Always deliver more than expected – <strong> Larry Page, co-founder of Google Larry Page </strong>",
"	Always look for the fool in the deal. If you don’t find one, it’s you – <strong> Mark Cuban, AXS TV Chairman and entrepreneur </strong>",
"	Always think outside the box and embrace opportunities that appear, wherever they might be – <strong> Lakshmi Mittal, Chairman & CEO of ArcelorMittal </strong>",
"	An entrepreneur is someone who has a vision for something and a want to create – <strong> David Karp, founder, and CEO of Tumblr </strong>",
"	Anything that is measured and watched, improves – <strong> Bob Parsons, founder of GoDaddy </strong>",
"	Being Challenged In Life Is Inevitable, Being Defeated Is Optional – <strong> Roger Crawford, public speaker, author, and certified tennis professional</strong>",
"	Believe you can and you’re halfway there – <strong> Theodore Roosevelt,</strong>",
"	Best startups generally come from somebody needing to scratch an itch – <strong> Michael Arrington, founder and co-editor of TechCrunch </strong>",
"	Challenges are what make life interesting and overcoming them is what makes life meaningful – <strong> Joshua J. Marine, author</strong>",
"	Character cannot be developed in ease and quiet. Only through experience of trial and suffering can the soul be strengthened, ambition inspired, and success achieved – <strong> Helen Keller, American author, political activist and lecturer </strong>",
"	Character cannot be developed in ease and quiet. Only through experience of trial and suffering can the soul be strengthened, ambition inspired, and success achieved-- Helen Keller</strong>",
"	Chase the vision, not the money, the money will end up following you – <strong> Tony Hsieh, CEO of Zappos Tony Hsieh </strong>",
"	Data beats emotions – <strong> Sean Rad, founder of Tinder.</strong>",
"	Design is not just what it looks like and feels like. Design is how it works – <strong> Steve Jobs, co-founder, Chairman, and CEO of Apple Inc. </strong>",
"	Diligence is the mother of good luck – <strong> Benjamin Franklin, a Founding Father of the United States </strong>",
"	Do not be embarrassed by your failures, learn from them and start again – <strong> Richard Branson, founder of the Virgin Group</strong>",
"	Do not let the memories of your past limit the potential of your future. There are no limits to what you can achieve on your journey through life, except in your mind ― Roy T. Bennett, author</strong>",
"	Do one thing every day that scares you-- Anonymous</strong>",
"	Don’t be afraid to give up the good to go for the great– <strong>John D. Rockefeller,  American oil industry business magnate</strong>",
"	Don’t be cocky. Don’t be flashy. There’s always someone better than you – <strong> Tony Hsieh, CEO of Zappos </strong>",
"	Don’t count the days, make the days count – <strong> Muhammad Ali, American professional boxer</strong>",
"	Don’t ever let somebody tell you you can’t do something, not even me. Alright? You dream, you gotta protect it. People can’t do something themselves, they wanna tell you you can’t do it. If you want something, go get it. Period – <strong> Chris Gardner, The Pursuit of Happyness</strong>",
"	Don’t play games that you don’t understand, even if you see lots of other people making money from them – <strong> Tony Hsieh, CEO of Zappos </strong>",
"	Don’t say you don’t have enough time. You have exactly the same number of hours per day that were given to Helen Keller, Pasteur, Michelangelo, Mother Teresa, Leonardo Da Vinci, Thomas Jefferson, and Albert Einstein – <strong>H. Jackson Brown Jr., American author</strong>",
"	Don’t take too much advice. Most people who have a lot of advice to give – <strong> with a few exceptions – <strong> generalize whatever they did. Don’t over-analyze everything.  I myself have been guilty of over-thinking problems. Just build things and find out if they work – <strong> Ben Silbermann, founder of Pinterest </strong>",
"	Don’t try to be original, just try to be good – <strong> Paul Rand, Graphic Designer </strong>",
"	Don’t worry about failure; you only have to be right once – <strong> Drew Houston, founder and CEO of Dropbox</strong>",
"	Don’t worry about failures, worry about the chances you miss when you don’t even try – <strong> Jack Canfield, American author, motivational speaker, corporate trainer, and entrepreneur</strong>",
"	Don’t worry about funding if you don’t need it. Today it’s cheaper to start a business than ever – <strong> Noah Everett, founder of Twitpic </strong>",
"	Don’t worry about people stealing your design work. Worry about the day they stop – <strong> Jeffrey Zeldman, entrepreneur and web designer </strong>",
"	Don't be afraid to give up the good to go for the great--John D. Rockefeller</strong>",
"	Don't be distracted by criticism. Remember--the only taste of success some people get is to take a bite out of you-- Zig Ziglar</strong>",
"	Don't let the fear of losing be greater than the excitement of winning-- Robert Kiyosaki</strong>",
"	Education costs money. But then so does ignorance – <strong> Sir Claus Moser, British statistician</strong>",
"	Embrace what you don’t know, especially in the beginning, because what you don’t know can become your greatest asset. It ensures that you will absolutely be doing things different from everybody else – <strong> Sara Blakely, founder of SPANX </strong>",
"	Even if you are on the right track, you’ll get run over if you just sit there – <strong> Will Rogers, American actor</strong>",
"	Ever tried. Ever failed. No matter. Try Again. Fail again. Fail better– <strong> Samuel Beckett, Irish avant-garde novelist and playwright</strong>",
"	Every day that we spent not improving our products was a wasted day – <strong> Joel Spolsky, co-founder of Stack Overflow </strong>",
"	Every man dies, but not every man really lives – <strong> William Wallace, Braveheart</strong>",
"	Every time we launch a feature, people yell at us – <strong> Angelo Sotira, co-founder of deviantART </strong>",
"	Everything you’ve ever wanted is on the other side of fear – <strong> George Addair, real-estate developer</strong>",
"	Failure is so important. We speak about success all the time. It is the ability to resist failure or use failure that often leads to greater success. I’ve met people who don’t want to try for fear of failing – <strong> J.K. Rowling, British novelist</strong>",
"	Failure is success if we learn from it – <strong> Malcolm Forbes, American entrepreneur and publisher of Forbes magazine</strong>",
"	Failure Will Never Overtake Me If My Determination To Succeed Is Strong Enough – <strong> Og Mandino, American author</strong>",
"	Fall seven times and stand up eight-- Japanese Proverb</strong>",
"	Fall seven times, stand up eight – <strong> Japanese Proverb</strong>",
"	Fearlessness is like a muscle. I know from my own life that the more I exercise it the more natural it becomes to not let my fears run me – <strong> Arianna Huffington, president of The Huffington Post Media Group</strong>",
"	Find a truly original idea. It is the only way I will ever distinguish myself. It is the only way I will ever matter – <strong> John Nash, A Beautiful Mind</strong>",
"	Fortunes are built during the down market and collected in the upmarket – <strong> Jason Calacanis, founder of LAUNCH Ticker </strong>",
"	Get a mentor in the applicable field if you’re at all unsure of what you’re looking for – <strong> Kyle Bragger, founder of Forrst, and co-founder of Exposure </strong>",
"	Get big quietly, so you don’t tip off potential competitors – <strong> Chris Dixon, an investor at Andreessen Horowitz </strong>",
"	Get five or six of your smartest friends in a room and ask them to rate your idea – <strong> Mark Pincus, CEO of Zynga </strong>",
"	Great men are not born great, they grow great – <strong> Vito Corleone, The Godfather</strong>",
"	However difficult life may seem, there is always something you can do and succeed at – <strong> Stephen Hawking, English theoretical physicist, cosmologist, and author</strong>",
"	Human beings have an innate inner drive to be autonomous, self-determined and connected to one another. And, when that drive is liberated, people achieve more and live richer lives – <strong> Daniel Pink, author </strong>",
"	I always wanted to be somebody, but now I realise I should have been more specific– <strong> Lily Tomlin, American actress</strong>",
"	I am not a product of my circumstances. I am a product of my decisions – <strong> Stephen Covey, American educator, author, and businessman</strong>",
"	I cannot give you the formula for success, but I can give you the formula for failure--It is: Try to please everybody-- <strong>Herbert Bayard Swope</strong>","	I failed my way to success-- <strong>Thomas Edison</strong>",
"	I find that the harder I work, the more luck I seem to have – <strong> Thomas Jefferson, Founding Father and President of the United States</strong>",
"	I find that the harder I work, the more luck I seem to have-- <strong>Thomas Jefferson</strong>",
"	I got lucky because I never gave up the search. Are you quitting too soon? Or, are you willing to pursue luck with a vengeance?’ – <strong> Jill Konrath, speaker, author and thought leader</strong>",
"	I knew that if I failed I wouldn’t regret that, but I knew the one thing I might regret is not trying – <strong> Jeff Bezos, founder, and CEO of Amazon</strong>",
"	I never did anything worth doing by accident, nor did any of my inventions come indirectly through accident, except the phonograph. No, when I have fully decided that a result is worth getting, I go about it, and make trial after trial, until it comes-- Thomas Edison</strong>",
"	I never dreamed about success, I worked for it – <strong> Estee Lauder, founder of Estee Lauder Cosmetics Estee Lauder </strong>",
"	I never dreamed about success, I worked for it-- <strong>Estee Lauder</strong>",
"	I owe my success to having listened respectfully to the very best advice, and then going away and doing the exact opposite – <strong> G. K. Chesterton, English writer, poet, and philosopher</strong>",
"	I owe my success to having listened respectfully to the very best advice, and then going away and doing the exact opposite-- <strong>G. K. Chesterton</strong>",
"	I try not to make any decisions that I’m not excited about – <strong> Jake Nickell, founder and CEO of Threadless </strong>","	Ideas are commodity. Execution of them is not – <strong> Michael Dell, chairman, and CEO of Dell </strong>",
"	Ideas are easy. Implementation is hard – <strong> Guy Kawasaki, entrepreneur and co-founder of Alltop </strong>",
"	If people like you, they’ll listen to you, but if they trust you, they’ll do business with you – <strong> Zig Ziglar, author, salesman, and motivational speaker </strong>",
"	If you are not embarrassed by the first version of your product, you’ve launched too late – <strong> Reid Hoffman, co-founder of LinkedIn </strong>",
"	If you are not willing to risk the usual, you will have to settle for the ordinary- <strong>Jim Rohn</strong>",
"	If you are not willing to risk the usual, you will have to settle for the ordinary– <strong> Jim Rohn, American entrepreneur, author and motivational speaker</strong>",
"	If you are working on something that you really care about, you don’t have to be pushed. The vision pulls you – <strong> Steve Jobs, co-founder, Chairman and CEO of Apple Inc.</strong>",
"	If you can dream it, you can do it – <strong> Walt Disney, founder of the Disney Brother Studio and Disneyland</strong>",
"	If you can dream it, you can do it-- <strong>Walt Disney</strong>",
"	If you can push through that feeling of being scared, that feeling of taking a risk, really amazing things can happen – <strong> Marissa Mayer, president & CEO of Yahoo!</strong>",
"	If you can’t feed a team with two pizzas, it’s too large – <strong> Jeff Bezos, Founder and CEO of Amazon </strong>",
"	If you can’t fly then run. If you can’t run, then walk. And, if you can’t walk, then crawl, but whatever you do, you have to keep moving forward – <strong> Martin Luther King Jr., leader of the civil rights movement</strong>",
"	If you define yourself by how you differ from the competition, you are probably in trouble – <strong> Omar Hamoui, co-founder of AdMob </strong>",
"	If you just work on stuff that you like and you’re passionate about, you don’t have to have a master plan with how things will play out – <strong> Mark Zuckerberg, founder of Facebook </strong>",
"	If you really look closely, most overnight successes took a long time-- <strong>Steve Jobs</strong>",
"	If you really look closely, most overnight successes took a long time– <strong> Steve Jobs, co-founder, Chairman and CEO of Apple Inc.</strong>",
"	If you really want to do something, you'll find a way. If you don't, you'll find an excuse-- <strong>Jim Rohn</strong>",
"	If you’re interested in the living heart of what you do, focus on building things rather than talking about them – <strong> Ryan Freitas, co-founder of About.me </strong>",
"	If you’re passionate about something and you work hard, then I think you will be successful– <strong> Pierre Omidyar, founder and chairman of Ebay</strong>",
"	In order to succeed, we must first believe that we can-- <strong>Nikos Kazantzakis</strong>",
"	In order to succeed, your desire for success should be greater than your fear of failure-- <strong>Bill Cosby</strong>",
"	In the end, a vision without the ability to execute it is probably a hallucination – <strong> Steve Case, co-founder of AOL </strong>",
"	In this lifetime, you don’t have to prove nothing to nobody, except yourself. And after what you’ve gone through, if you haven’t done that by now, it ain’t gonna never happen – <strong> Fortune, Rudy</strong>",
"	It always seems impossible until it’s done – <strong> Nelson Mandela, Former President of South Africa, political leader, and philanthropist</strong>",
"	It doesn’t matter how many times you fail. It doesn’t matter how many times you almost get it right. No one is going to know or care about your failures, and neither should you. All you have to do is learn from them and those around you because all that matters in business is that you get it right once. Then everyone can tell you how lucky you are – <strong> Mark Cuban, entrepreneur, owner of Landmark Theaters and Chairman of AXS TV</strong>",
"	It is better to fail in originality than to succeed in imitation – <strong> Herman Melville, American novelist</strong>",
"	It is better to fail in originality than to succeed in imitation-- <strong>Herman Melville</strong>",
"	It is not our abilities that show what we truly are. It is our choices – <strong> Dumbledore, Harry Potter and the Chamber of Secrets</strong>",
"	It’s hard to beat a person who never gives up – <strong> Babe Ruth, American professional baseball player</strong>",
"	It’s more effective to do something valuable than to hope a logo or name will say it for you – <strong> Jason Cohen, founder of Smartbear Software Business </strong>",
"	It’s not about ideas. It’s about making ideas happen – <strong> Scott Belsky, co-founder of Behance </strong>",
"	Keep on going, and the chances are that you will stumble on something, perhaps when you are least expecting it. I never heard of anyone ever stumbling on something sitting down-- <strong>Charles F. KetteringWhat's your favorite success quote?</strong>",
"	Lean forward into your life. Begin each day as if it were on purpose ―<strong>Mary Anne Radmacher, author</strong>",
"	Let me tell you the secret that has led to my goal. My strength lies solely on my tenacity– <strong> Louis Pasteur, French biologist, microbiologist and chemist</strong>",
"	Life isn’t about finding yourself. Life is about creating yourself― George Bernard Shaw, Irish playwright</strong>",
"	Life moves pretty fast. If you don’t stop and look around once in a while, you could miss it – <strong> Ferris, Ferris Bueller’s Day Off</strong>",
"	Life’s Challenges Are Not Supposed To Paralyze You, They’re Supposed To Help You Discover Who You Are – <strong> Bernice Johnson Reagon, song leader, composer, and social activist</strong>",
"	Listen, smile, agree, and then do whatever you were gonna do anyway – <strong> Robert Downey Jr., American actor</strong>",
"	Live each day as if your life had just begun – <strong> Johann Wolfgang Von Goethe, German writer</strong>",
"	Make each day your masterpiece – <strong>  John Wooden, American basketball player</strong>",
"	Make every detail perfect and limit the number of details to perfect – <strong> Jack Dorsey, co-founder of Twitter </strong>",
"	Make the most of yourself by fanning the tiny, inner sparks of possibility into flames of achievement – <strong> Golda Meir, fourth Prime Minister of Israel </strong>",
"	Many of life’s failures are experienced by people who did not realize how close they were to success when they gave up  – <strong> Thomas Edison, entrepreneur and inventor</strong>",
"	Many of life's failures are people who did not realize how close they were to success when they gave up-- Thomas Edison</strong>",
"	Money is like gasoline during a road trip. You don’t want to run out of gas on your trip, but you’re not doing a tour of gas stations – <strong> Tim O’Reilly, founder, and CEO of O’Reilly Media </strong>",
"	Never give in except to convictions of honor and good sense-- Winston Churchill</strong>",
"	Never give up on a dream just because of the time it will take to accomplish it. The time will pass anyway – <strong> Earl Nightingale, American radio speaker and author</strong>",
"	No great achiever – <strong> even those who made it seem easy – <strong> ever succeeded without hard work – <strong> Jonathan Sacks, British author and politician</strong>",
"	No matter how brilliant your mind or strategy, if you’re playing a solo game, you’ll always lose out to a team – <strong> Reid Hoffman, LinkedIn co-founder </strong>",
"	No matter what anybody tells you, words and ideas can change the world – <strong> John Keating, Dead Poets Society</strong>",
"	No more romanticizing about how cool it is to be an entrepreneur. It’s a struggle to save your company’s life – <strong> and your own skin – <strong> every day of the week – <strong> Spencer Fry, co-founder of CarbonMade </strong>",
"	Nobody is gonna hit as hard as life, but it ain’t how hard you can hit. It’s how hard you can get hit and keep moving forward. It’s how much you can take, and keep moving forward. That’s how winning is done – <strong> Rocky, Rocky Balboa</strong>",
"	Nothing works better than just improving your product – <strong> Joel Spolsky, co-founder of Stack Overflow </strong>",
"	Obstacles don’t have to stop you. If you run into a wall, don’t turn around and give up. Figure out how to climb it, go through it, or work around it – <strong> Michael Jordan, former professional basketball player</strong>",
"	Oh yes, the past can hurt. But you can either run from it, or learn from it – <strong> Rafiki, The Lion King</strong>",
"	Opportunities don't happen. You create them-- Chris Grosser</strong>",
"	Opportunity is missed by most people because it is dressed in overalls and looks like work – <strong> Thomas Edison, entrepreneur and inventor</strong>",
"	Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time – <strong> Thomas Edison, entrepreneur and inventor</strong>",
"	Our lives are defined by opportunities, even the ones we miss – <strong> Benjamin Button, The Curious Case of Benjamin Button</strong>",
"	People often say that motivation doesn’t last. Well, neither does bathing – <strong> that’s why we recommend it daily – <strong> Zig Ziglar, American author</strong>",
"	People who succeed have momentum. The more they succeed, the more they want to succeed, and the more they find a way to succeed. Similarly, when someone is failing, the tendency is to get on a downward spiral that can even become a self-fulfilling prophecy-- Tony Robbins</strong>",
"	People who succeed have momentum. The more they succeed, the more they want to succeed, and the more they find a way to succeed. Similarly, when someone is failing, the tendency is to get on a downward spiral that can even become a self-fulfilling prophecy – <strong> Tony Robbins, life and business strategist, and author</strong>",
"	Pleasure in the job puts perfection in the work – <strong> Aristotle, father of Western philosophy</strong>",
"	Remember, today is the tomorrow you worried about yesterday – <strong> Dale Carnegie, American writer</strong>",
"	Risk more than others think is safe. Dream more than others think is practical – <strong> Howard Schultz, CEO of Starbucks </strong>",
"	See things in the present, even if they are in the future – <strong> Larry Ellison, co-founder of Oracle </strong>",
"	So often people are working hard at the wrong thing. Working on the right thing is probably more important than working hard – <strong> Caterina Fake, Flickr co-founder</strong>",
"	Some people can’t believe in themselves until someone else believes in them first – <strong> Sean Maguire, Good Will Hunting</strong>",
"	Some people dream of success while others wake up and work-- Unknown</strong>",
"	Some people dream of success, while other people get up every morning and make it happen – <strong> Wayne Huizenga, prolific American business person, owner of Blockbuster Video and the Miami Dolphins. Wayne Huizenga </strong>",
"	Someday is not a day of the week – <strong> Janet Dailey, author</strong>",
"	Someone I once knew wrote that we walk away from our dreams afraid that we may fail or worse yet, afraid we may succeed – <strong> Forrester, Finding Forrester</strong>",
"	Sometimes it is the people who no one imagines anything of who do the things that no one can imagine – <strong> Alan Turing, The Imitation Game</strong>",
"	Stay self-funded as long as possible – <strong> Garrett Camp, founder of Expa, Uber, and StumbleUpon </strong>",
"	Step out of the history that is holding you back. Step into the new story you are willing to create – <strong> Oprah Winfrey, media proprietor </strong>",
"	Stop chasing the money and start chasing the passion – <strong> Tony Hsieh, CEO of Zappos</strong>",
"	Stop chasing the money and start chasing the passion-- Tony Hsieh</strong>",
"	Strength shows not only in the ability to persist, but in the ability to start over – <strong> F. Scott Fitzgerald, American fiction writer</strong>",
"	Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do – <strong> Pele, Brazilian retired professional footballer</strong>",
"	Success is not final; failure is not fatal: It is the courage to continue that counts-- Winston S. Churchill</strong>",
"	Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful-- Albert Schweitzer</strong>",
"	Success is the sum of small efforts – <strong> repeated day in and day out – <strong> Robert Collier, author</strong>",
"	Success is walking from failure to failure with no loss of enthusiasm-- Winston Churchill</strong>",
"	Success isn't just about what you accomplish in your life; it's about what you inspire others to do-- Unknown</strong>",
"	Success seems to be connected with action. Successful people keep moving. They make mistakes, but they don’t quit – <strong> Conrad Hilton, Founder of the Hilton Hotels </strong>",
"	Success seems to be connected with action. Successful people keep moving. They make mistakes, but they don't quit-- Conrad Hilton</strong>",
"	Success seems to be largely a matter of hanging on after others have let go – <strong> William Feather, American publisher and author</strong>",
"	Success usually comes to those who are too busy to be looking for it – <strong> Henry David Thoreau, essayist, poet, and philosopher</strong>",
"	Success usually comes to those who are too busy to be looking for it-- Henry David Thoreau</strong>",
"	Successful people do what unsuccessful people are not willing to do. Don’t wish it were easier; wish you were better – <strong> Jim Rohn, one of America’s foremost business philosophers</strong>",
"	Successful people do what unsuccessful people are not willing to do. Don't wish it were easier; wish you were better-- Jim Rohn</strong>",
"	The accident is your training. Life is a choice. You can choose to be a victim or anything else you’d like to be – <strong> Socrates, from Peaceful Warrior</strong>",
"	The biggest adventure you can take is to live the life of your dreams ― Oprah Winfrey, media proprietor</strong>",
"	The biggest adventure you can take is to live the life of your dreams– <strong> Michael Jordan, American former professional basketball player</strong>",
"	The difference between who you are and who you want to be is what you do-- Unknown</strong>",
"	The elevator to success is out of order. You’ll have to use the stairs… one step at a time – <strong> Joe Girard, American salesman</strong>",
"	The fastest way to change yourself is to hang out with people who are already the way you want to be – <strong> Reid Hoffman, LinkedIn co-founder </strong>",
"	The more I want to get something done the less I call it work – <strong> Richard Bach, American writer</strong>",
"	The most dangerous poison is the feeling of achievement. The antidote is to every evening think what can be done better tomorrow – <strong> Ingvar Kamprad, founder of IKEA </strong>",
"	The ones who are crazy enough to think they can change the world, are the ones that do-- Anonymous</strong>",
"	The only limit to our realization of tomorrow will be our doubts of today-- Franklin D. Roosevelt</strong>",
"	The only place where success comes before work is in the dictionary-- Vidal Sassoon</strong>",
"	The only real mistake is the one from which we learn nothing – <strong> Henry Ford, founder of the Ford Motor Company</strong>",
"	The only thing standing between you and your goal is the bullshit story you keep telling yourself as to why you can’t achieve it – <strong> Jordan Belfort, Wolf of the Wall Street</strong>",
"	The only thing that overcomes hard luck is hard work – <strong> Harry Golden, American writer</strong>",
"	The only thing worse than starting something and failing… is not starting something – <strong> Seth Godin, author, entrepreneur, and blogger</strong>",
"	The pessimist sees difficulty in every opportunity. The optimist sees the opportunity in every difficulty – <strong> Winston Churchill, Prime Minister of Great Britain during World War II.</strong>",
"	The real test is not whether you avoid this failure, because you won’t. It’s whether you let it harden or shame you into inaction, or whether you learn from it; whether you choose to persevere – <strong> Barack Obama,</strong>",
"	The real test is not whether you avoid this failure, because you won't. It's whether you let it harden or shame you into inaction, or whether you learn from it; whether you choose to persevere-- Barack Obama</strong>",
"	The road to success and the road to failure are almost exactly the same – <strong> Colin R. Davis, English conductor for the London Symphony Orchestra</strong>",
"	The road to success and the road to failure are almost exactly the same-- Colin R. Davis</strong>",
"	The road to success is dotted with many tempting parking spaces – <strong> Will Rogers, American actor</strong>",
"	The secret of change is to focus all your energy not on fighting the old but on building the new – <strong> Socrates, father of Western philosophy </strong>",
"	The secret of success is to do the common thing uncommonly well-- <strong>John D. Rockefeller Jr.</strong>",
"	The secret to success is to know something nobody else knows-- <strong>Aristotle Onassis</strong>",
"	The stars will never align, and the traffic lights of life will never all be green at the same time. The universe doesn’t conspire against you, but it doesn’t go out of its way to line up the pins either. Conditions are never perfect. Someday’ is a disease that will take your dreams to the grave with you. Pro and con lists are just as bad. If it’s important to you and you want to do it eventually,’ just do it and correct course along the way – <strong> Tim Ferriss, author of The</strong>",
"	The successful warrior is the average man, with laser-like focus-- <strong>Bruce Lee</strong>",
"	The Ultimate Measure Of A Man Is Not Where He Stands In Moments Of Comfort And Convenience, But Where He Stands At Times Of Challenge And Controversy – <strong> Martin Luther King, Jr., leader of the civil rights movement</strong>",
"	The value of an idea lies in the using of it – <strong> Thomas Edison, co-founder of General Electric </strong>",
"	The way to get started is to quit talking and begin doing-- <strong>Walt Disney</strong>",
"	There are no secrets to success. It is the result of preparation, hard work, and learning from failure – <strong> Colin Powell, US statesman and retired four-star General in the United States Army</strong>",
"	There are no secrets to success. It is the result of preparation, hard work, and learning from failure-- <strong>Colin Powell</strong>",
"	There are two types of people who will tell you that you cannot make a difference in this world: those who are afraid to try and those who are afraid you will succeed – <strong> Ray Goforth, director of strategy and partnerships at Spredfast</strong>",
"	There are two types of people who will tell you that you cannot make a difference in this world: those who are afraid to try and those who are afraid you will succeed-- <strong>Ray Goforth</strong>",
"	There is a powerful driving force inside every human being that, once unleashed, can make any vision, dream, or desire a reality-- <strong>Anthony Robbins</strong>",
"	There is no greater agony than bearing an untold story inside you ―<strong>Maya Angelou, American poet, singer, and civil rights activist</strong>",
"	There is no substitute for hard work – <strong> Thomas Edison, entrepreneur and inventor</strong>",
"	There is simply no substitute for hard work when it comes to achieving success – <strong> Heather Bresch, CEO of Mylan</strong>",
"	There should be no boundaries to human endeavor. We are all different. However bad life may seem, there is always something you can do, and succeed at. While there’s life, there is hope – <strong> Stephen Hawking, The Theory of Everything</strong>",
"	There’s nothing wrong with staying small. You can do big things with a small team – <strong> Jason Fried,</strong>",
"	Timing, perseverance, and ten years of trying will eventually make you look like an overnight success – <strong> Biz Stone, co-founder of Twitter Biz Stone </strong>",
"	Today’s Accomplishments Were Yesterday’s Impossibilities – <strong> Robert H. Schuller, American motivational speaker</strong>",
"	Try not to become a man of success. Rather become a man of value – <strong> Albert Einstein, theoretical physicist</strong>",
"	Try not to become a man of success. Rather become a man of value-- <strong>Albert Einstein</strong>",
"	We May Encounter Many Defeats But We Must Not Be Defeated – <strong> Maya Angelou, American poet, singer, and civil rights activist</strong>",
"	What do you need to start a business? Three simple things: know your product better than anyone, know your customer, and have a burning desire to succeed – <strong> Dave Thomas, Founder of Wendy’s </strong>",
"	What we do in life echoes in eternity – <strong> Maximus, from Gladiator</strong>",
"	What we fear of doing most is usually what we most need to do – <strong> Ralph Waldo Emerson, essayist, philosopher, and poet</strong>",
"	When I hear somebody sigh, Life is hard, I am always tempted to ask, Compared to what?’’ – <strong> Sydney Harris, American journalist</strong>",
"	When I’m old and dying, I plan to look back on my life and say wow, that was an adventure,’ not wow, I sure felt safe’ – <strong> Tom Preston-Werner, co-founder of Github</strong>",
"	When we least expect it, life sets us a challenge to test our courage and willingness to change; at such a moment, there is no point in pretending that nothing has happened or in saying that we are not yet ready. The challenge will not wait. Life does not look back – <strong> Paulo Coelho, Brazilian lyricist and novelist</strong>",
"	When we strive to become better than we are, everything around us becomes better too – <strong> Paulo Coelho,  Brazilian lyricist and novelist</strong>",
"	When you find an idea that you just can’t stop thinking about, that’s probably a good one to pursue – <strong> Josh James, CEO and co-founder of Omniture </strong>",
"	Whether you think you can, or think you can’t – <strong> you’re right – <strong> Henry Ford, founder of the Ford Motor Company Henry Ford </strong>", "Why do we fall sir? So that we can learn to pick ourselves up – <strong> Alfred, Batman Begins</strong>",
"	Wonder what your customer really wants? Ask. Don’t tell – <strong> Lisa Stone, co-founder and CEO of BlogHer </strong>",
"	Would you like me to give you a formula for success? It’s quite simple, really: Double your rate of failure. You are thinking of failure as the enemy of success. But it isn’t at all. You can be discouraged by failure or you can learn from it, so go ahead and make mistakes. Make all you can. Because remember that’s where you will find success – <strong> Thomas J. Watson,</strong>",
"	Would you like me to give you a formula for success? It's quite simple, really: Double your rate of failure. You are thinking of failure as the enemy of success. But it isn't at all. You can be discouraged by failure or you can learn from it, so go ahead and make mistakes. Make all you can. Because remember that's where you will find success--<strong> Thomas J. Watson</strong>",
"	You Are Never Too Old To Set Another Goal Or To Dream A New Dream – <strong> C.S. Lewis, British writer</strong>",
"	You can’t make anything viral, but you can make something good – <strong> Peter Shankman, founder of HARO </strong>",
"	You do what you can for as long as you can, and when you finally can’t, you do the next best thing. You back up but you don’t give up ― Chuck Yeager, former United States Air Force officer</strong>",
"	You don’t need to have a</strong>",
"	You gain strength, courage, and confidence by every experience in which you really stop to look fear in the face. You are able to say to yourself, I lived through this horror. I can take the next thing that comes along. You must do the thing you think you cannot do – <strong> Eleanor Roosevelt, known as’First Lady of the World’ for her human rights advocacy</strong>",
"	You get in life what you have the courage to ask for ― Oprah Winfrey, media proprietor</strong>",
"	You have to believe in yourself when no one else does – <strong> that makes you a winner right there – <strong> Venus Williams, American professional tennis player</strong>",
"	You know you are on the road to success if you would do your job, and not be paid for it-- Oprah Winfrey</strong>",
"	You must learn from the mistakes of others. You can’t possibly live long enough to make them all yourself – <strong> Sam Levenson, American humorist</strong>",
"	You mustn’t be afraid to dream a little bigger, darling – <strong> Eames, Inception</strong>",
"	Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do – <strong> Steve Jobs, co-founder, Chairman and CEO of Apple Inc.</strong> ");

   var item = items[Math.floor(Math.random()*items.length)];
   insertChat("remote",item);
}     

function display_contacts() {
    var myContacts = localStorage.getItem("saved");
        insertChat("remote",myContacts);
        maximizeo();
}

function get_airtime() {
     queryBot("stopper");
        insertChat("local","Get airtime");
        queryBot("get airtime");
        maximizeo();
       // $('.navbar-header').hide();
        //$('.slicknav_menu').hide();
}

function minimizeo() {

        
        $('.QuickHelp-inner-box-chat').hide(); 
        //$('#state_icon').attr('src', 'https://quickhelp.com.ng/img/max_menu.png');
        $('.chat_frame').removeClass('panel-fullscreen'); 
        $('.chat_frame').removeClass('panel-normal'); 
        
         $(".state_icon2").replaceWith('<a href="#" onclick="maximizeo()" class="state_icon2" role="button" title="control chat"><img src="https://quickhelp.com.ng/img/max_menu.png" class="icons" id="state_icon"></a>' );
   
    
   
}


function maximizeo() {

        
         $('.QuickHelp-inner-box-chat').show(); 
       //$('#state_icon').attr('src', 'https://quickhelp.com.ng/img/min_menu.png');
       
       $(".state_icon2").replaceWith('<a href="#" onclick="minimizeo()" class="state_icon2" role="button" title="control chat"><img src="https://quickhelp.com.ng/img/min_menu.png" class="icons" id="state_icon"></a>' );
       
        $('.chat_frame').addClass('panel-fullscreen'); 
        //$('.chat_frame').removeClass('panel-fullscreen');   
       
        //$('.navbar-header').hide();
       // $('.slicknav_menu').hide();
   
    
   
}     
       
function quickhelpswitch() {
     queryBot("stopper");
    $mee = $('#switcho');
    $mee.toggleClass('off');
    
    if($mee.is(".off")){
        insertChat("local", "Switch to a Brand");
        queryBot("switch");
        localStorage.setItem("sw_mode","messenger");
        $('#switcho').attr('src', 'https://widget.quickhelp.com.ng/images1/if_quick2.png');
    }else {
          //insertChat("local", "switch back");
          queryBot("switch back");
        $('#switcho').attr('src', 'https://widget.quickhelp.com.ng/images1/if_quick.png');
    }
    
   
}
     
     
     function quickhelpswitch_mess() {
    $mee = $('#switcho_mess');
    $mee.toggleClass('off');
    
    if($mee.is(".off")){
        //insertChat("local", "switch to QuickHelp");
        queryBot("switch to messenger");
        localStorage.setItem("sw_mode","messenger");
        $('#switcho_mess').attr('src', 'https://quickhelp.com.ng/img/chat_2_active.png');
         $("#switcho").css("display", "none");
         localStorage.setItem("messenger","active");
         startMess();
    }else {
          //insertChat("local", "switch back");
          queryBot("switch back");
          localStorage.setItem("sw_mode","quicke");
        $('#switcho_mess').attr('src', 'https://quickhelp.com.ng/img/chat_2.png');
        $("#switcho").css("display", "inline");
        localStorage.setItem("messenger","inactive");
        stopMess();
    }
    
     
    
   
}

 function quickhelpswitch_mess2() {
     
     
     $mee.toggleClass('on');
        localStorage.setItem("sw_mode","messenger");
        $('#switcho_mess').attr('src', 'https://quickhelp.com.ng/img/chat_2_active.png');
         $("#switcho").css("display", "none");
         localStorage.setItem("messenger","active");
         startMess();
          
      }

function quickhelp_balance() {
        insertChat('local', "balance");
        queryBot("balance");
}



