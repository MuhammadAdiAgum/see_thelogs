function noOption() {
    Swal.fire("No Server Selected", "Please Choose the Server!", "error");
}

function noDate() {
    Swal.fire("No Date Detected", "Please Choose the Date!", "error");
}

function emptyLogs() {
    // Swal.fire("No Logs Detected", "info");
    Swal.fire({
        // icon: 'error',
        // title: 'No Logs Detected',

        // position: 'bottom-end',
        icon: 'info',
        title: 'No Logs Detected',
        showConfirmButton: false,
        timer: 2000,
        width: 400
    })
}

function haveLogs() {
    Swal.fire({
        icon: 'success',
        title: 'Logs Detected',
        showConfirmButton: false,
        timer: 2000,
        width: 400
    })
}

function waitingLogs() {
    $("#overlay").fadeOut(300);
}

function wrongLogin() {
    Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: 'Username or Password is Wrong!',
        showConfirmButton: false,
        timer: 1500,
        width: 425
    })
}

function logoutConfirm() {
    Swal.fire({
        title: 'Are you sure?',
        // text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Logout!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'auth/logout.php'
            // Swal.fire(
            //     'Logged Out',
            //     'You has been logged out.',
            //     'info'
            // )
        }
    })
}