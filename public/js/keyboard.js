document.addEventListener('DOMContentLoaded', function () {
    const keys = document.querySelectorAll('.key');

    keys.forEach(key => {
        key.addEventListener('click', toggleKey);
    });

    function toggleKey(event) {
        const clickedKey = event.target;
        const keyNumber = clickedKey.dataset.key;

        console.log({event, keyNumber})

        // Send an AJAX request to toggle the key state
        fetch('toggle-key', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({user: 1, key: keyNumber}) // Adjust user value as needed
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Update UI to reflect the key state change
                }
            });

        // Acquire Control Button Click Event
        const acquireControlButton = document.getElementById('acquire-control-button');
        acquireControlButton.addEventListener('click', acquireControl);


        function acquireControl() {
            // Send an AJAX request to acquire control
            fetch('acquire-control', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({user: 1}) // Adjust user value as needed
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update UI to indicate control acquired
                        // Disable the acquire control button, etc.
                    }
                });
        }
    }
});
