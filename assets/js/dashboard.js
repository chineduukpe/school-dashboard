$('.nav-toggle').click(function(e){
	$('.main-content').toggleClass('collapsed');
	$('.sidemenu').toggleClass('active');
})

$('.sidemenu .menu li a').click(function(e){
	$('.sidemenu .menu li').removeClass('active');
	$(this).parent().addClass('active');
})

$('a[data-toggle="submenu"]').click(function(e){
	e.currentTarget.parentNode.querySelector('.submenu').classList.toggle('active');
})

$('.file-form-group button.file-upload-button').click(function(e){
	e.currentTarget.parentNode.querySelector('input[type="file"]').click()
});
$('.file-form-group input[type="file"]').change(function(e){
	let filename = this.files.item(0).name;
	let name_filename_container = e.currentTarget.parentNode.querySelector('span.upload-file-name')
	name_filename_container.innerText = filename
});

$('a[data-toggle="message-box"]').click(function(e){
	$('.message-box').toggleClass('show');
})

console.log('loded')