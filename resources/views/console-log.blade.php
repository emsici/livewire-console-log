<script>
    document.addEventListener('livewire:load', function () {
        window.livewire.on('consoleLogLivewire', (messages) => {
            messages.forEach((message) => {
                let logMessage = "";
                let logStyles = [];

                message.forEach((part) => {
                    logMessage += `%c${part.text} `;
                    logStyles.push(part.style);
                });

                console.log(logMessage.trim(), ...logStyles);
            });
        });
    });
</script>
