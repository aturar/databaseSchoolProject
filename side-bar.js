function openNav() {
    document.getElementById("mySidenav").classList.add('positionRight');
    document.getElementById("main").classList.add('moveRight');
    
}

function detailedSideBar() {
	document.getElementById('mySidenav').classList.add('moveRight');
	document.getElementById("main").classList.add('moveRight');
	document.querySelector('.detailedSideNav').style.width = '250px';
}


document.querySelector('.restaraunts').addEventListener('click', function() {
	document.querySelector('.restarauntsList').style.display = 'block';
	document.querySelector('.guidesList').style.display = 'none';
	document.getElementById('mySidenav').classList.add('moveRight');
	document.getElementById("main").classList.add('moveRight');
	document.querySelector('.detailedSideNav').style.width = '250px';
});

document.querySelector('.guides').addEventListener('click', function() {
	document.querySelector('.restarauntsList').style.display = 'none';
	document.querySelector('.guidesList').style.display = 'block';
	document.getElementById('mySidenav').classList.add('moveRight');
	document.getElementById("main").classList.add('moveRight');
	document.querySelector('.detailedSideNav').style.width = '250px';
});


function showGuidesSection() {
	document.getElementById('mySidenav').classList.add('moveRight');
	document.getElementById("main").classList.add('moveRight');
	document.querySelector('.detailedSideNav').style.width = '250px';	
	document.querySelector('.guides').style.display = 'visible';
}

function showRestaraunts() {
	document.getElementById('mySidenav').classList.add('moveRight');
	document.getElementById("main").classList.add('moveRight');
	document.querySelector('.detailedSideNav').style.width = '250px';	
	document.querySelector('.restaraunts').style.display = 'visible';
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").classList.remove('positionRight');
    document.getElementById("main").classList.remove('moveRight');
    document.getElementById("main").classList.remove('moveRight');
}

function closeDetailedSideNav() {
	document.getElementById("main").classList.remove('moveRight');
	document.querySelector('.detailedSideNav').style.width = '0px';	
}
