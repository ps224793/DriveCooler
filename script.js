var collapsed = true;

function menu() {
    if (collapsed) {
    document.getElementById('navBar').style.height='110px';
    document.getElementById('expanded').style.display='flex';
    collapsed = false;
        return;
    }

    document.getElementById('navBar').style.height='70px';
    document.getElementById('expanded').style.display='none';

    collapsed = true;
    return;
}