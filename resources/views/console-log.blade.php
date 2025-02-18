<script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('LivewireConsoleLog', (event) => {
                let messages = event.detail.messages;
                messages.forEach((message) => {
                    let logMessage = "";
                    let logStyles = [];

                    if (Array.isArray(message)) {
                        message.forEach((part) => {
                            logMessage += `%c${part[0].text} `;
                            logStyles.push(part[0].style);
                        });

                        console.log(logMessage.trim(), ...logStyles);
                    } else {
                        console.log('Message format is incorrect');
                    }
                });
            });
        });
    </script>