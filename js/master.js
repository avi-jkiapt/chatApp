$(function(){
  $('#chat_box').hide();
  
  $('.button_open').on('click',function(){
       $('.button_open').hide(100);
       $('#chat_box').show(100);
  });
  
  $('#cross').on('click',function(){
          $('.button_open').show(100);
          $('#chat_box').hide(100);
    });
  
 
});

function livechat(){
  
  var hot = new XMLHttpRequest();
  hot.onreadystatechange=function(){
     if(hot.readyState == 4 && hot.status == 200)
     {
       document.getElementById('chat_body').innerHTML = hot.responseText;
     }
  };
  hot.open('GET','message.php',true);
  hot.send();
}
setInterval(function(){ livechat();},1000);