




var tabCycle;
function tabChange() {
  var tabs = $('.nav-tabs > li');
  var active = $('.nav-tabs > li').find('a.active');
  var next = active.parent('li').next('li').find('a');
  if (next.length === 0) {
    next = $('.nav-tabs > li').first().find('a').click();
  }
  next.tab('show');
}

$('.nav-tabs').hover(
  function () {
    clearInterval(tabCycle); // Stop cycling on hover
  },
  function () {
    tabCycle = setInterval(tabChange, 2000); // Resume cycling when mouse leaves
  }
);

tabCycle = setInterval(tabChange, 2000); // Start the initial cycling






