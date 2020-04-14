window.onload = function () {
  checkAuth();
  document.getElementById("form").addEventListener('submit',sendRequest);
  document.getElementById("form1").addEventListener('submit',sendRequestRegistr);
  if(document.getElementById("load_comment")!= null){
    sendRequestComments();
    document.getElementById("post_comment_button").addEventListener('click',sendRequestWriteComments);
    document.getElementById("load_comment").addEventListener('click',sendRequestComments);
  }
}

function Exit() {

let request = new XMLHttpRequest();
 request.open("POST","Exit.php");
 request.send();

document.getElementById('log').setAttribute('style','display:flex');
document.getElementById('reg').setAttribute('style','display:flex');
document.getElementById('Exit').setAttribute('style','display:none');
document.getElementById('user_block').setAttribute('style','display:none');

}

function sendRequest(event) {
  event.preventDefault();
  var form = document.forms.auth;
  let formData = new FormData(form);
  let request = new XMLHttpRequest();
  request.open("POST","auth.php");
  request.onreadystatechange = function () {
         if (request.readyState == 4 && request.status == 200){
           let check = request.responseText;
           if(check == "false"){

             alert('false')
           }
           else{
           let user_info = JSON.parse(check);
           document.getElementById('nickname').innerHTML = user_info['username'];
           document.getElementById('user_block').setAttribute('style','display:flex');
           document.getElementById('log').setAttribute('style','display:none');
           document.getElementById('reg').setAttribute('style','display:none');
           document.getElementById('Exit').setAttribute('style','display:flex');
           open_registr()
           }
         }
     }
  request.send(formData);
}
function sendRequestRegistr() {
  event.preventDefault();
  var form = document.forms.registr;
  let formData = new FormData(form);
  let request = new XMLHttpRequest();
  request.open('POST','registr.php');
  request.onreadystatechange = function () {
    if(request.readyState == 4 && request.status == 200){
      let check = request.responseText;
      if(check == 'login'){
        document.getElementById('r_error_text').innerHTML = "Данный логин уже используется";
      }
      else if(check == 'email'){
        document.getElementById('r_error_text').innerHTML = "Данная почта уже используется";
      }
     
      
      else{
        let user_info = JSON.parse(check);
        document.getElementById('nickname').innerHTML = user_info['username'];
        document.getElementById('user_block').setAttribute('style','display:flex')
        document.getElementById('log').setAttribute('style','display:none');
        document.getElementById('reg').setAttribute('style','display:none');
        document.getElementById('Exit').setAttribute('style','display:flex');
        background_off();
      }
    }
  }
  request.send(formData);
}
function checkAuth() {
  let request = new XMLHttpRequest();
  request.open('POST',"check_auth.php")
  request.onreadystatechange = function () {
     if (request.readyState == 4 && request.status == 200){
       let check = request.responseText;
       if(check != "false"){
        let user_info = JSON.parse(check);
           document.getElementById('nickname').innerHTML = user_info['username'];
           document.getElementById('user_block').setAttribute('style','display:flex');
           document.getElementById('Exit').setAttribute('style','display:flex');
       }
       else{
           document.getElementById('log').setAttribute('style','display:block');
           document.getElementById('reg').setAttribute('style','display:block');

       }
     }
  }
  request.send();
}

function sendRequestWriteComments(){
   if(document.getElementById('post_comment_textarea').value==""){
    alert('Заполните поле.');
    return;
  }
  var form = document.forms.form_comment;
  let formData = new FormData(form);
  let request = new XMLHttpRequest();
  request.open('POST',"add_comments.php");
  request.onreadystatechange = function (){
    if(request.readyState == 4 && request.status == 200){
      let check = request.responseText;
      if(!check){
        alert('Вы не авторизированы на сайте');
      }
      else{
        let data_comment = JSON.parse(check);
        let html = "<div class='comment'><div><div class='user_logo_comment'></div><div class='user_login_comment'>"+data_comment['login']+"</div></div><div class='user_text_comment'>"+data_comment['comment']+"</div></div>";
        document.getElementById('comments').insertAdjacentHTML('afterEnd', html);
      }
    }
  }
  request.send(formData);
}
function sendRequestComments(){
  let request = new XMLHttpRequest();
  let form = document.forms.form_comment;
  let formData = new FormData(form);
  request.open('POST','load_comments.php');
  request.onreadystatechange = function(){
    if(request.readyState == 4 && request.status==200){
      let check = request.responseText;
          if(!check){

          }
          else{
            let data_comments = JSON.parse(check);
            for(var key in data_comments){
              if(key == 'new_start'){
                 document.getElementById('comment_number').value = data_comments[key]
          }
              else{
                let html = "<div class='comment'><div><div class='user_logo_comment'></div><div class='user_login_comment'>"+data_comments[key]['login']+"</div></div><div class='user_text_comment'>"+data_comments[key]['comment']+"</div></div>";
                document.getElementById('load_comment').insertAdjacentHTML('beforeBegin', html);
              }

            }
          }
    }
  }
  request.send(formData);
}