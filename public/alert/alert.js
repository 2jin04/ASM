var close = document.getElementsByClassName("closebtn");
  var alerts = document.getElementsByClassName("alert");
  var container = document.getElementsByClassName("alerts-container")[0];

  for (var i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.opacity = "0";
      setTimeout(function() {
        div.style.display = "none";
        updateAlertPositions();
      }, 600);
    }
  }

  // Tự động đóng thông báo sau 3 giây
  setTimeout(function() {
    for (var j = 0; j < alerts.length; j++) {
      (function(index) {
        setTimeout(function() {
          alerts[index].style.opacity = "0";
          setTimeout(function() {
            alerts[index].style.display = "none";
            updateAlertPositions();
          }, 600);
        }, index * 3000);
      })(j);
    }
  }, 3000);

  // Sắp xếp lại vị trí các thông báo ban đầu
  window.onload = function() {
    updateAlertPositions();
  };

  function updateAlertPositions() {
    var visibleAlerts = [];
    for (var i = 0; i < alerts.length; i++) {
      if (alerts[i].style.display !== "none") {
        visibleAlerts.push(alerts[i]);
      }
    }
    for (var j = 0; j < visibleAlerts.length; j++) {
      visibleAlerts[j].style.top = (j * (visibleAlerts[j].offsetHeight + 15)) + 'px';
    }
  }