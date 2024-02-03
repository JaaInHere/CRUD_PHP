// console.log('hai saya js');
var sidebar = document.getElementById('sidebar');
var actBtn = document.getElementById('actBtn');

function muncul() {
    if (sidebar.classList.contains('hide')) {
        // Show the sidebar
        actBtn.classList.add('btn-danger');
        actBtn.innerHTML = 'Close';
    } else {    
        // Program Else adalah program atau potongan skrip yang akan dijalankan
        // bila kondisi di setiap if /else tidak terpenuhi
        // Hide the sidebar
        actBtn.classList.remove('btn-danger');
        actBtn.innerHTML = 'Action';
    }
    sidebar.classList.toggle('hide');
}

function deleteData() {
    
}
