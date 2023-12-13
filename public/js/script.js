const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});


document.addEventListener('DOMContentLoaded', function () {
    const notificationIcon = document.querySelector('.notification-icon');
    const notificationPanel = document.querySelector('.notification-panel');

    notificationIcon.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent the event from propagating to the document click listener
        notificationPanel.classList.toggle('open');

        // Update the right position of the notification icon based on the panel's width
        const panelWidth = notificationPanel.offsetWidth;
        notificationIcon.style.right = notificationPanel.classList.contains('open') ? panelWidth + 'px' : 0;
    });

    // Close the notification panel if clicked outside of it
    document.addEventListener('click', function () {
        notificationPanel.classList.remove('open');
        notificationIcon.style.right = 0;
    });

    // Prevent the notification panel from closing when clicked inside it
    notificationPanel.addEventListener('click', function (event) {
        event.stopPropagation();
    });
});

