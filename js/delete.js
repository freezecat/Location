$(document).ready(function(){
	var article = document.querySelectorAll(".articles");
	var l = article.length;
	for(var i=0;i<l;i++)
	{
		
		
		article[i].onclick = function(e){
		e.preventDefault();
		
		var question = confirm("Etes-vous sur de vouloir retirer cet article?");
			if(question)
			{
			var id = this.getAttribute("id");
			var index = id.substr(7);
			//alert(index);
			
			$.post("ajax/delete.php",{"index":index},function(data){
				
				
			
				alert(data);
				
				
			});
			}
			else
			{
				alert("Opération interrompu.");
			}
		}
		
	}
});