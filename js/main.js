window.onload = function() {
  //setDates();
  //showPopupWindow();
  startCheckDate();
}

function setDates() { 
  var endDate = document.getElementById('end_date');
  var beginDate = document.getElementById('begin_date');
  var currentDate = moment();

  var getNormalDate = function(date){ 
    var day = date.get('date');
    var month = date.get('month');
    var year = date.get('year');
    month++;
    if (day<10) 
      day='0'+day; 
    if (month<10) 
      month='0'+month; 
    return year + '-' + month + '-' + day; 
  };
  
  //alert(beginDate.value + "ddd");
  
  if (beginDate.value == '')
  {
    endDate.value = getNormalDate(currentDate);
    beginDate.value = getNormalDate(currentDate.subtract(1, 'months'));
  }
}

function checkDates() {
  var endDateField = document.getElementById('end_date');
  var beginDateField = document.getElementById('begin_date');
  var endDate = endDateField.value;
  var beginDate = beginDateField.value;
  if (moment(endDate).isAfter(moment(beginDate)))
    return true;
  else
    {
      alert('Начальная дата больше конечной');
      return false;
    }
}

function startCheckDate() {
  var startButton = document.getElementById('find_button');
  var allCopiesTable = document.getElementById('all_copies_table');
  startButton.addEventListener('click', checkDates);
  allCopiesTable.classList.remove('all_copies');
  
}

function showPopupWindow() {
    var popupWindow = document.getElementById('popup'); 
    var background = document.getElementById('background');
    var editIcons = document.getElementsByClassName('edit_icon');
    var tagBody = document.getElementsByTagName('body')[0];
    var tagHtml = document.getElementsByTagName('html')[0];
    
    function displayWindow(event) {
        
        event.preventDefault();
        background.classList.add('set_visible');
        popupWindow.classList.add('set_visible');
        tagBody.classList.add('remove_overflow');
        tagHtml.classList.add('remove_overflow');
    }

    function closeWindow(event) {
        event.preventDefault();
        background.classList.remove('set_visible');
        popupWindow.classList.remove('set_visible');
        tagBody.classList.remove('remove_overflow');
        tagHtml.classList.remove('remove_overflow');
    }
    

    document.getElementById('writeme').addEventListener('click', displayWindow);
    document.getElementById('close_window').addEventListener('click', closeWindow);
    background.addEventListener('click', closeWindow);
    document.getElementById('send').addEventListener('click', checkForm);
    for (var i = 0; i < requiredFields.length; i++) {
        requiredFields[i].addEventListener('focus', removeBorder);
    }
}

function checkForm() {
    var hasEmptyFields = false;
    var requiredFields = document.getElementsByClassName('required_field');
    
    for (var i = 0; i < requiredFields.length; i++){
        if (requiredFields[i].value == '') {
            requiredFields[i].classList.add('error');
            hasEmptyFields = true;
        }
    }
    
    if (hasEmptyFields) {
        event.preventDefault();
    }
}