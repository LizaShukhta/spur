$(function(){
	setInterval(ajax_func, 1000);
});

function ajax_func(){
	var id=$('#room').attr('data-id');
	console.log(id);
 $.ajax({
   type: "Post",
   url: "/ajax/room", 
   data: 'id='+id,
   success: function(data){
    $('.success').html(data);
   },
   error: function(msg){
    console.log(msg);
   }
 });
}