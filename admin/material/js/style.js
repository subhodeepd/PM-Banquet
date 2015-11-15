$(document).ready(function(){
    $('select').material_select();
    $('.modal-trigger').leanModal();
    $(".button-collapse").sideNav();


if($("#clothes").prop('checked') == true){
    //do something
    alert("clothes checked");
}
$('.material-search-close').click(function(){
	$('.material-search-form .material-search-input input[name=s]').blur();
	$('.material-search-overlay').toggleClass('material-search-overlay-hidden').toggleClass('material-search-overlay-visible');
	$('.material-search-form').toggleClass('material-search-form-hidden').toggleClass('material-search-form-visible');
});

$('.datepicker').pickadate({
    selectMonths: true,
    selectYears: 15
  });

$('#category').change(function(){
	$( "#book option:selected" ).each(function() {
        $('#second').html('<option>Got it</option>');
	   $('#second').append("<option>"+data[$(this).text()]+"</option>");
    });
});

$('#clothes').change(function(){
            alert(this.checked);
        });
});