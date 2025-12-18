<div id="ia-btn" onclick="toggleIA()">
<i class="bi bi-robot fs-3"></i>
</div>

<div id="ia-chat" class="card shadow">
<div class="card-header bg-primary text-white">Asistente IA</div>
<div id="ia-body" class="card-body" style="height:200px;overflow:auto">
<p class="text-muted">IA en desarrollo 🤖</p>
</div>
<div class="card-footer">
<input id="ia-input" class="form-control" placeholder="Escribe aquí">
<button onclick="sendIA()" class="btn btn-primary w-100 mt-1">Enviar</button>
</div>
</div>

<script>
function toggleIA(){
 const chat=document.getElementById('ia-chat');
 chat.style.display=chat.style.display==='none'?'block':'none';
}

async function sendIA(){
 const input=document.getElementById('ia-input');
 const body=document.getElementById('ia-body');
 body.innerHTML+=`<div class="text-end text-primary">${input.value}</div>`;
 const r=await fetch('https://api.quotable.io/random');
 const d=await r.json();
 body.innerHTML+=`<div class="text-start text-muted">${d.content}</div>`;
 input.value='';
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
