window.onload = function() {
	var slideout = new Slideout({
		'panel': document.getElementById('panel'),
		'menu': document.getElementById('menu'),
		'side': 'right'
	});

	document.querySelector('.slideout-toggle').addEventListener('click', function() {
		slideout.toggle();
	});

	document.querySelector('.menu').addEventListener('click', function(eve) {
		if (eve.target.nodeName === 'A') { slideout.close(); }
	});

	function close(eve) {
  eve.preventDefault();
  slideout.close();
}

slideout
  .on('beforeopen', function() {
    this.panel.classList.add('panel-open');
  })
  .on('open', function() {
    this.panel.addEventListener('click', close);
  })
  .on('beforeclose', function() {
    this.panel.classList.remove('panel-open');
    this.panel.removeEventListener('click', close);
  });
};
