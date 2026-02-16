<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Statistique Dashboard</title>

<style>



/* ===== MODAL OVERLAY ===== */
.modal-overlay {
  position: fixed;
  inset: 0;
  z-index: 999;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 1rem;

  /* blur + dim */
  backdrop-filter: blur(6px) brightness(0.5);
  -webkit-backdrop-filter: blur(6px) brightness(0.5);
  background: rgba(0, 0, 0, 0.25);

  opacity: 0;
  pointer-events: none;
  transition: opacity 0.3s ease;
}

.modal-overlay.active {
  opacity: 1;
  pointer-events: all;
}

/* ===== MODAL BOX ===== */
.modal-box {
  background: white;
  border-radius: 20px;
  padding: 30px;
  width: 100%;
  max-width: 420px;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
  position: relative;

  transform: scale(0.9) translateY(20px);
  transition: transform 0.35s cubic-bezier(.34,1.56,.64,1), opacity 0.3s ease;
  opacity: 0;
}

.modal-overlay.active .modal-box {
  transform: scale(1) translateY(0);
  opacity: 1;
}

.modal-box h3 {
  color: var(--leaf-dark);
  font-size: 1.2rem;
  margin-bottom: 5px;
}

.modal-sub {
  color: var(--gray);
  font-size: 0.88rem;
  margin-bottom: 20px;
}

/* ===== CLOSE BUTTON ===== */
.modal-close {
  position: absolute;
  top: 14px;
  right: 16px;
  background: #f3f4f6;
  border: none;
  border-radius: 8px;
  width: 30px;
  height: 30px;
  font-size: 0.9rem;
  cursor: pointer;
  color: var(--gray);
  transition: background 0.2s;
}
.modal-close:hover { background: #fee2e2; color: var(--danger); }

/* ===== RADIO ROLES LIST ===== */
.role-list {
  display: flex;
  flex-direction: column;
  gap: 10px;
  margin-bottom: 24px;
}

.role-option {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 12px 16px;
  border: 2px solid #e5e7eb;
  border-radius: 12px;
  cursor: pointer;
  transition: border-color 0.2s, background 0.2s;
}

.role-option:hover {
  border-color: var(--leaf);
  background: var(--leaf-light);
}

.role-option input[type="radio"] {
  accent-color: var(--leaf);
  width: 17px;
  height: 17px;
  cursor: pointer;
}

.role-option input[type="radio"]:checked + span {
  color: var(--leaf-dark);
  font-weight: bold;
}

.role-option:has(input:checked) {
  border-color: var(--leaf);
  background: var(--leaf-light);
}

/* ===== MODAL ACTIONS ===== */
.modal-actions {
  display: flex;
  gap: 10px;
}

.btn-cancel {
  flex: 1;
  background: #f3f4f6;
  color: var(--gray);
}
.btn-cancel:hover { background: #e5e7eb; }
/* ====== COLORS (leaf / earth theme) ====== */
:root{
    --leaf-dark:#14532d;
    --leaf:#16a34a;
    --leaf-light:#dcfce7;
    --earth:#92400e;
    --earth-light:#fef3c7;
    --danger:#dc2626;
    --gray:#6b7280;
}

/* ====== GLOBAL ====== */
body{
    font-family: Arial, Helvetica, sans-serif;
    background:#f9fafb;
    margin:0;
    padding:40px;
}

h1{
    color:var(--leaf-dark);
    margin-bottom:10px;
}

p{
    color:var(--gray);
    margin-bottom:30px;
}

/* ====== CARDS ====== */
.stats{
    display:flex;
    gap:20px;
    margin-bottom:40px;
}

.card{
    flex:1;
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card h3{
    color:var(--gray);
    margin-bottom:10px;
}

.card span{
    font-size:35px;
    font-weight:bold;
    color:var(--leaf);
}

/* ====== TABLE ====== */
.section{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
    margin-bottom:40px;
}

.section h2{
    margin-bottom:20px;
    color:var(--leaf-dark);
}

table{
    width:100%;
    border-collapse:collapse;
}

thead{
    background:var(--leaf-light);
}

th, td{
    padding:12px;
    text-align:left;
}

tr{
    border-bottom:1px solid #eee;
}

tr:hover{
    background:#f0fdf4;
}

/* ====== BUTTONS ====== */
.btn{
    padding:6px 14px;
    border-radius:12px;
    border:none;
    cursor:pointer;
    font-size:14px;
    transition:0.3s;
}

.btn-edit{
    background:var(--earth);
    color:white;
}

.btn-edit:hover{
    opacity:0.85;
}

.btn-delete{
    background:var(--danger);
    color:white;
}

.btn-delete:hover{
    opacity:0.85;
}

.badge{
    background:var(--leaf);
    color:white;
    padding:5px 12px;
    border-radius:20px;
    font-size:13px;
}

.no-role{
    color:var(--danger);
    font-weight:bold;
}

.btn-add{
    background:var(--leaf-dark);
    color:white;
}

.btn-add:hover{
    opacity:0.85;
}

</style>
</head>
<body>

    <h1>📊 Statistique Dashboard</h1>
    <div style="display: flex; justify-content:space-between">
    <p>Gestion des rôles et utilisateurs</p>

                    <a href="{{route('index')}}">
                        <button class="px-4 py-2 rounded-2xl bg-leaf-500 text-white font-semibold hover:bg-leaf-600 transition">
                            dashbord

                        </button>
                    </a>
</div>

<!-- STATS CARDS -->
<div class="stats">
    <div class="card">
        <h3>Total Users</h3>
        <span>15</span>
    </div>
    <div class="card">
        <h3>Total Roles</h3>
        <span>4</span>
    </div>
</div>

<!-- ROLES SECTION -->
<div class="section">
    <h2>Roles</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>
            @foreach($role->permissions as $permission)

                        <span>{{$permission->route_name}} | </span>
            @endforeach
                        
                    <a href="{{route('Modifier-role',$role->id)}}">
                        <button class="btn btn-edit">Modifier</button>
                    </a>
                    <a href="{{route('supprimer-role',$role->id)}}">
                        <button class="btn btn-delete">Supprimer</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- USERS SECTION -->
<div class="section">
    <h2>Users</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                @if($user->role)
                <td><span class="badge">{{$user->role->name}}</span>

                <!-- <a href=""><button class="btn btn-edit" >Modifier</button></a> -->

                <a href="{{route('supprimer-user',$user->id)}}"><button class="btn btn-delete" >Supprimer</button></a>
                
                </td>
                @else
                <td>
                    <span class="no-role">No Role</span>
                    
                    <button class="btn btn-add" onclick="openRoleModal({{$user->id}})">Add Role</button>
                    <a href="{{route('supprimer-user',$user->id)}}"><button class="btn btn-delete" >Supprimer</button></a>
                </td>
                @endif
            </tr>
            <!-- ===== MODAL: Add Role ===== -->
<div class="modal-overlay" id="addRoleOverlay">
  <div class="modal-box">
    <button class="modal-close" onclick="closeRoleModal()">✕</button>

    <h3>Assigner un Rôle</h3>
    <p class="modal-sub">Choisissez un rôle pour cet utilisateur</p>

<form method="post" action="{{ route('Ajouter-Role')}}">
      @csrf
      @method('POST')
      <input type="hidden" name="user_id" id="modalUserId" />

      <div class="role-list" id="roleList">
          @foreach($roles as $role)
          <label>
                    <input type="radio" name="role_id" value="{{$role->id}}">
                    {{$role->name}}
                </label>
                @endforeach
      </div>

      <div class="modal-actions">
        <button type="button" class="btn btn-cancel" onclick="closeRoleModal()">Annuler</button>
        <button type="submit" class="btn btn-add">Confirmer</button>
      </div>
    </form>
  </div>
</div>

            <!-- <tr>
                <td>2</td>
                <td>Sara</td>
                <td>sara@mail.com</td>
                <td>
                    <span class="no-role">No Role</span>
                    <button class="btn btn-add">Add Role</button>
                </td>
            </tr> -->
            @endforeach
        </tbody>
    </table>
</div>

<script>
         // ===== JS =====
     
     function openRoleModal(userId) {
       document.getElementById('modalUserId').value = userId;
     
     
       document.getElementById('addRoleOverlay').classList.add('active');
     }
     
     function closeRoleModal() {
       document.getElementById('addRoleOverlay').classList.remove('active');
     }
     
     // إغلاق بالكليك خارج الـ modal
     document.getElementById('addRoleOverlay').addEventListener('click', function(e) {
       if (e.target === this) closeRoleModal();
     });
     
     // إغلاق بـ ESC
     document.addEventListener('keydown', e => {
       if (e.key === 'Escape') closeRoleModal();
     });
</script>
</body>
</html>
