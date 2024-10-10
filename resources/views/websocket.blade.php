<!DOCTYPE html>
<html>

<head>
    <title>websocket テスト</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <button id="button">イベント発火</button>
    <p>
        イベントが発行されたことを Dev tool のコンソールで確認できます。
    </p>
    <script>
        // web socket
        window.addEventListener("load", () => {
            window.Echo.channel('reverb-test').listen('TestReverbEvent', (e) => console.dir(e.message))
        });
        // ボタンのクリックイベント
        const button = document.getElementById('button');
        button.addEventListener('click', () => {
            const url = 'http://localhost:8080/websocket-test/dispatch-event';
            axios.get(url).then(() => console.log('response recieved'))
        })
    </script>
</body>

</html>
