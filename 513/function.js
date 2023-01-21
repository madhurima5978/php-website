const myTimeout = setInterval(loop,5000);
		function myStopFunction()
		{
			clearTimeout(myTimeout);
		}
        function loop()
		{
			if(document.getElementById('eventContent1').style.display == 'block')
			{
				document.getElementById('eventContent2').style.display = 'block';
				document.getElementById('eventContent1').style.display = 'none';
			}
			else if(document.getElementById('eventContent2').style.display == 'block')
			{
				document.getElementById('eventContent1').style.display = 'block';
                document.getElementById("eventContent2").style.display = 'none';
			}
			 
        }
		function show(){
			var myButton=document.getElementById('eventContent2');
			var button=document.getElementById('eventContent1');
			button.style.display='none';
			myButton.style.display='block';
			
		}
		function show1(){
			var myButton1=document.getElementById('eventContent2');
			var button=document.getElementById('eventContent1');
				myButton1.style.display='none';
				button.style.display='block';
		}