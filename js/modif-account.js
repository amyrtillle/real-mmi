
    var btnUpdate = document.getElementById('update-infos');
    var btnCancel = document.getElementById('cancel-infos');
    var infos = document.getElementById('account-infos');
    var form = document.getElementById('form-update')


    btnUpdate.addEventListener('click', function () {

        infos.classList.add("hidden");
        btnUpdate.classList.add("hidden");

        form.classList.remove("hidden");
        btnCancel.classList.remove("hidden");

    });

    btnCancel.addEventListener('click', function () {

        infos.classList.remove("hidden");
        btnUpdate.classList.remove("hidden");

        form.classList.add("hidden");
        btnCancel.classList.add("hidden");

    });