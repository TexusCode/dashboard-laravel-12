@if(session('message'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
            const toast = Toastify({
                text: "{{ session('message') }}",
                duration: 5000,
                gravity: "top",
                position: "center",
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                    borderRadius: '15px',
                    cursor: 'pointer'
                },
                onClick: () => toast.hideToast()
            }).showToast();
    });
</script>
@endif