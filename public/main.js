document.addEventListener('DOMContentLoaded', function() {
    var sidebar = document.getElementById('sidebar');
    var profileDropdown = document.getElementById('ProfileDropDown');

    function sidebarToggle() {
        if (sidebar.style.display === "none" || sidebar.style.display === "") {
            sidebar.style.display = "block";
        } else {
            sidebar.style.display = "none";
        }
    }

    function profileToggle() {
        if (profileDropdown.style.display === "none" || profileDropdown.style.display === "") {
            profileDropdown.style.display = "block";
        } else {
            profileDropdown.style.display = "none";
        }
    }

    document.getElementById('sidebarToggleBtn').addEventListener('click', sidebarToggle);
    document.getElementById('profileToggleBtn').addEventListener('click', profileToggle);

    /**
     * ### Modals ###
     */
    function toggleModal(action, elem_trigger) {
        elem_trigger.addEventListener('click', function() {
            if (action === 'add') {
                let modal_id = this.dataset.modal;
                document.getElementById(`${modal_id}`).classList.add('modal-is-open');
            } else {
                let modal_id = elem_trigger.closest('.modal-wrapper').getAttribute('id');
                document.getElementById(`${modal_id}`).classList.remove('modal-is-open');
            }
        });
    }

    if (document.querySelector('.modal-wrapper')) {
        document.querySelectorAll('.modal-trigger').forEach(btn => {
            toggleModal('add', btn);
        });

        document.querySelectorAll('.close-modal').forEach(btn => {
            toggleModal('remove', btn);
        });
    }
});
