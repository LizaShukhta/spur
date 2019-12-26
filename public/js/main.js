$(function(){
	setInterval(ajax_func, 1000);
});

function ajax_func(){
	console.log('ok');
 $.ajax({
   type: "Post",
   url: "/ajax", 
   success: function(data){
    $('.rooms').html(data);
   },
   error: function(msg){
    console.log(msg);
   }
 })
}