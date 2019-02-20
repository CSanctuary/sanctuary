document.getElementById('form1').addEventListener('submit', function(evt){
    evt.preventDefault();
    document.getElementById('donate').style.display = 'none';
    document.getElementById('topMessage').style.display = 'none';
})
