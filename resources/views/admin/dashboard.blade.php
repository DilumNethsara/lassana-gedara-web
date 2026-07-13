<!DOCTYPE html>
<html lang="si">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lassana Gedara — Admin Dashboard</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap');

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --brand: #800000;
    --brand-light: #fff0f0;
    --brand-mid: #b30000;
    --brand-dark: #5a0000;
    --brand-glow: rgba(128,0,0,0.12);
    --sidebar-w: 240px;
    --topbar-h: 60px;
    --gray-50: #f7f6f3;
    --gray-100: #efede8;
    --gray-200: #e0ddd6;
    --gray-400: #9e9b94;
    --gray-700: #3d3a35;
    --gray-900: #1a1815;
    --success: #1d9e74;
    --radius: 8px;
    --radius-lg: 14px;
    --font-sans: 'DM Sans', -apple-system, sans-serif;
    --font-display: 'Playfair Display', Georgia, serif;
    --shadow-sm: 0 1px 4px rgba(0,0,0,0.06), 0 0 0 1px rgba(0,0,0,0.04);
    --shadow-md: 0 4px 16px rgba(0,0,0,0.08), 0 1px 4px rgba(0,0,0,0.05);
    --shadow-brand: 0 4px 20px rgba(128,0,0,0.25);
  }

  body {
    font-family: var(--font-sans);
    background: var(--gray-50);
    color: var(--gray-900);
    display: flex;
    min-height: 100vh;
    background-image:
      radial-gradient(ellipse 80% 40% at 70% -10%, rgba(128,0,0,0.04) 0%, transparent 60%),
      radial-gradient(ellipse 60% 30% at 100% 80%, rgba(128,0,0,0.03) 0%, transparent 50%);
  }

  /* ── SIDEBAR ── */
  .sidebar {
    width: var(--sidebar-w);
    background: linear-gradient(180deg, #1a0a0a 0%, #2d0f0f 60%, #1a0a0a 100%);
    position: fixed;
    top: 0; bottom: 0; left: 0;
    padding: 28px 18px;
    display: flex;
    flex-direction: column;
    box-shadow: 4px 0 24px rgba(0,0,0,0.18);
    z-index: 100;
  }

  .sidebar::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, #cc3333, transparent);
  }

  .brand {
    font-family: var(--font-display);
    font-size: 17px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 36px;
    padding-left: 10px;
    letter-spacing: 0.2px;
    position: relative;
  }

  .brand::after {
    content: '';
    display: block;
    width: 32px;
    height: 2px;
    background: var(--brand-mid);
    margin-top: 8px;
    border-radius: 2px;
  }

  .nav-list { list-style: none; display: flex; flex-direction: column; gap: 4px; }

  .nav-item a {
    display: flex;
    align-items: center;
    padding: 11px 14px;
    color: rgba(255,255,255,0.55);
    text-decoration: none;
    font-size: 13.5px;
    font-weight: 500;
    border-radius: var(--radius);
    transition: all 0.18s ease;
    letter-spacing: 0.1px;
  }

  .nav-item a:hover {
    background: rgba(255,255,255,0.08);
    color: rgba(255,255,255,0.9);
  }

  .nav-item.active a {
    background: linear-gradient(135deg, rgba(128,0,0,0.8), rgba(180,20,20,0.6));
    color: #fff;
    font-weight: 600;
    box-shadow: 0 2px 12px rgba(128,0,0,0.4), inset 0 1px 0 rgba(255,255,255,0.1);
  }

  .nav-footer {
    margin-top: auto;
    padding-top: 18px;
    border-top: 1px solid rgba(255,255,255,0.08);
  }

  .logout-btn {
    display: block;
    text-align: center;
    padding: 10px;
    background: rgba(255,255,255,0.06);
    color: rgba(255,255,255,0.5);
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    border-radius: var(--radius);
    transition: all 0.18s ease;
    border: 1px solid rgba(255,255,255,0.07);
  }

  .logout-btn:hover {
    background: rgba(220,38,38,0.2);
    color: #fca5a5;
    border-color: rgba(220,38,38,0.25);
  }

  /* ── MAIN ── */
  .main-content {
    margin-left: var(--sidebar-w);
    flex: 1;
    display: flex;
    flex-direction: column;
    min-width: 0;
  }

  .topbar {
    height: var(--topbar-h);
    background: rgba(255,255,255,0.85);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-bottom: 1px solid var(--gray-200);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 36px;
    position: sticky;
    top: 0;
    z-index: 50;
    box-shadow: 0 1px 8px rgba(0,0,0,0.05);
  }

  .topbar h1 {
    font-family: var(--font-display);
    font-size: 17px;
    font-weight: 600;
    color: var(--gray-900);
    letter-spacing: 0.2px;
  }

  .topbar h1::before {
    content: '⬥';
    color: var(--brand);
    margin-right: 10px;
    font-size: 10px;
    vertical-align: middle;
  }

  /* ── LAYOUT ── */
  .view-body {
    padding: 36px;
    max-width: 1400px;
    width: 100%;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 460px 1fr;
    gap: 28px;
    align-items: start;
    animation: fadeUp 0.4s ease both;
  }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(16px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  /* ── CARDS ── */
  .card {
    background: #fff;
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: 28px;
    box-shadow: var(--shadow-sm);
    transition: box-shadow 0.2s ease;
  }

  .card:hover {
    box-shadow: var(--shadow-md);
  }

  .card-title {
    font-size: 11px;
    font-weight: 700;
    margin-bottom: 22px;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    color: var(--brand);
    border-bottom: 1px solid var(--gray-100);
    padding-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .card-title::before {
    content: '';
    display: inline-block;
    width: 4px;
    height: 14px;
    background: linear-gradient(180deg, var(--brand), var(--brand-mid));
    border-radius: 2px;
    flex-shrink: 0;
  }

  /* ── FORM ── */
  .form-group { margin-bottom: 16px; }

  .form-label {
    display: block;
    font-size: 12px;
    font-weight: 600;
    color: var(--gray-700);
    margin-bottom: 6px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .form-control,
  .form-select,
  .form-textarea {
    width: 100%;
    font-family: var(--font-sans);
    font-size: 14px;
    padding: 9px 13px;
    border: 1.5px solid var(--gray-200);
    border-radius: var(--radius);
    outline: none;
    background: var(--gray-50);
    color: var(--gray-900);
    transition: border-color 0.15s ease, background 0.15s ease, box-shadow 0.15s ease;
  }

  .form-control:hover,
  .form-select:hover,
  .form-textarea:hover {
    border-color: #c0bdb6;
    background: #fff;
  }

  .form-control:focus,
  .form-select:focus,
  .form-textarea:focus {
    border-color: var(--brand);
    background: #fff;
    box-shadow: 0 0 0 3px var(--brand-glow);
  }

  .form-textarea { resize: vertical; min-height: 84px; line-height: 1.5; }
  .form-row-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }

  /* ── BUTTONS ── */
  .btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    font-weight: 600;
    padding: 10px 18px;
    border-radius: var(--radius);
    border: none;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.18s ease;
    letter-spacing: 0.2px;
  }

  .btn-brand {
    background: linear-gradient(135deg, var(--brand) 0%, var(--brand-mid) 100%);
    color: #fff;
    box-shadow: 0 2px 10px rgba(128,0,0,0.3);
  }

  .btn-brand:hover {
    background: linear-gradient(135deg, var(--brand-mid) 0%, #cc0000 100%);
    box-shadow: var(--shadow-brand);
    transform: translateY(-1px);
  }

  .btn-brand:active { transform: translateY(0); }

  .btn-secondary {
    background: var(--gray-100);
    color: var(--gray-700);
    border: 1px solid var(--gray-200);
  }

  .btn-secondary:hover {
    background: var(--gray-200);
    color: var(--gray-900);
  }

  .btn-danger {
    background: #fff0f0;
    color: #c72525;
    border: 1px solid #fcd0d0;
    font-size: 12px;
    padding: 5px 11px;
    border-radius: 6px;
  }

  .btn-danger:hover {
    background: #fee2e2;
    border-color: #f9a8a8;
    transform: scale(1.03);
  }

  /* ── TABLE ── */
  .table-wrapper {
    width: 100%;
    overflow-x: auto;
    border-radius: var(--radius-lg);
    border: 1px solid var(--gray-200);
    box-shadow: var(--shadow-sm);
  }

  .table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
    font-size: 13px;
  }

  .table thead tr {
    background: linear-gradient(90deg, #faf9f7, #f5f3ef);
  }

  .table th {
    color: var(--gray-700);
    font-weight: 700;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 14px 18px;
    border-bottom: 2px solid var(--gray-200);
  }

  .table td {
    padding: 13px 18px;
    border-bottom: 1px solid var(--gray-100);
    vertical-align: middle;
    transition: background 0.12s ease;
  }

  .table tbody tr:hover td {
    background: #fdf9f9;
  }

  .table tbody tr:last-child td {
    border-bottom: none;
  }

  /* ── BADGE ── */
  .badge {
    display: inline-block;
    font-size: 10.5px;
    font-weight: 700;
    padding: 3px 9px;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .badge-green {
    background: #e6f7f0;
    color: #1d9e74;
    border: 1px solid #b6e8d5;
  }

  /* ── FILE INPUT ── */
  input[type="file"].form-control {
    padding: 7px 10px;
    cursor: pointer;
    background: #fffbfb;
    border-color: #f0c4c4;
    color: var(--brand-dark);
    font-size: 13px;
  }

  input[type="file"].form-control:hover {
    border-color: var(--brand);
    background: #fff5f5;
  }

  /* ── NUMBER INPUT ── */
  input[type="number"].form-control::-webkit-inner-spin-button {
    opacity: 0.5;
  }
</style>
</head>
<body>

<div class="sidebar">
  <div class="brand">Lassana Gedara Admin</div>
  <ul class="nav-list">
    <li class="nav-item active"><a href="#">Dynamic Projects</a></li>
  </ul>
  <div class="nav-footer">
    <a href="{{ route('admin.logout') }}" class="logout-btn">Log Out</a>
  </div>
</div>

<div class="main-content">
  <div class="topbar">
    <h1>Dynamic Projects Engine</h1>
  </div>

  <div class="view-body">
    
    <div class="card">
      <div class="card-title">Create / Update Project</div>
      <form id="project-form" onsubmit="event.preventDefault();">
        
        <div class="form-group">
          <label class="form-label">Project ID (Unique Key)</label>
          <input type="text" id="f-id" class="form-control" placeholder="e.g. 1">
        </div>

        <div class="form-row-2">
          <div class="form-group">
            <label class="form-label">Location / Subtitle</label>
            <input type="text" id="f-loc" class="form-control" placeholder="Gampaha">
          </div>
          <div class="form-group">
            <label class="form-label">Target Page Type</label>
            <select id="f-page" class="form-select">
              <option value="architectural">Architectural Standard Page</option>
              <option value="architectural_1">Architectural Type 1 Page</option>
              <option value="architectural_2">Architectural Type 2 Page</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">Main Heading</label>
          <input type="text" id="f-head" class="form-control" placeholder="Modern 2-Story House Drawing">
        </div>

        <div class="form-group">
          <label class="form-label">Description Paragraph 1</label>
          <textarea id="f-desc1" class="form-textarea" placeholder="Detailed structural text..."></textarea>
        </div>

        <div class="form-group">
          <label class="form-label">Description Paragraph 2 (Optional)</label>
          <textarea id="f-desc2" class="form-textarea" placeholder="More information if needed..."></textarea>
        </div>

        <div class="form-row-2">
          <div class="form-group">
            <label class="form-label">Storage Folder</label>
            <input type="text" id="f-folder" class="form-control" value="assets/images/projects">
          </div>
          <div class="form-group">
            <label class="form-label">Image Prefix</label>
            <input type="text" id="f-prefix" class="form-control" placeholder="arch_1">
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">Autoplay Speed (ms)</label>
          <input type="number" id="f-speed" class="form-control" value="6000">
        </div>

        <div class="form-group" style="margin-bottom: 24px;">
          <label class="form-label" style="color: var(--brand); font-weight: 600;">Upload Project Images (Max 4 Allowed)</label>
          <input type="file" id="f-images" name="images[]" class="form-control" multiple accept="image/*" style="padding: 5px;">
        </div>

        <div style="display: flex; gap: 12px;">
          <button type="button" class="btn btn-brand" style="flex: 1;" onclick="saveProject()">Save Project</button>
          <button type="button" class="btn btn-secondary" onclick="clearForm()">Clear</button>
        </div>

      </form>
    </div>

    <div class="card">
  <div class="card-title">Saved Dynamic Items</div>
  <div class="table-wrapper">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Location</th>
          <th>Heading</th>
          <th>Page</th>
          <th>Images</th>
          <th>Prefix</th> 
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="projects-tbody">
        @if(isset($projects) && $projects->count() > 0)
          @foreach($projects as $p)
            <tr>
              <td><strong>{{ $p->project_id }}</strong></td>
              <td>{{ $p->location }}</td>
              <td>{{ $p->heading }}</td>
              <td><span class="badge badge-green">{{ $p->page_type }}</span></td>
              <td>
                @if($p->images)
                  <span style="color: var(--brand); font-weight: 600;">
                    {{ count(json_decode($p->images, true)) }} Images
                  </span>
                @else
                  0
                @endif
              </td>
              
              <td>
          {{ $p->image_prefix ?? 'N/A' }} 
        </td>

              <td>
                <form action="{{ route('admin.project.delete', $p->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger" style="padding: 4px 8px; font-size: 12px;">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <td colspan="7" style="text-align: center; color: var(--gray-400); padding: 32px;">No projects saved yet.</td>
          </tr>
        @endif
      </tbody>
    </table>
  </div>
</div>

<script>
function saveProject() {
  const id = document.getElementById('f-id').value.trim();
  const loc = document.getElementById('f-loc').value.trim();
  const head = document.getElementById('f-head').value.trim();
  const folder = document.getElementById('f-folder').value.trim();
  const prefix = document.getElementById('f-prefix').value.trim();

  if(!id || !loc || !head || !folder || !prefix) {
    alert('Please fill all required fields, including Image Folder and Prefix.');
    return;
  }

  const imageInput = document.getElementById('f-images');
  
  // Validation limit check for 4 images on frontend stage selection
  if(imageInput.files.length > 4) {
    alert('Maximum 4 images allowed! You selected ' + imageInput.files.length + ' images.');
    return;
  }

  const formData = new FormData();
  formData.append('project_id', id);
  formData.append('location', loc);
  formData.append('heading', head);
  formData.append('description_1', document.getElementById('f-desc1').value);
  formData.append('description_2', document.getElementById('f-desc2').value);
  formData.append('page_type', document.getElementById('f-page').value);
  formData.append('image_folder', folder);
  formData.append('image_prefix', prefix);
  formData.append('autoplay_speed', document.getElementById('f-speed').value);

  if(imageInput.files.length > 0) {
    for (let i = 0; i < imageInput.files.length; i++) {
      formData.append('images[]', imageInput.files[i]);
    }
  }

  const token = document.querySelector('meta[name="csrf-token"]').content;

  fetch("{{ route('admin.project.store') }}", {
    method: "POST",
    headers: {
      'X-CSRF-TOKEN': token
    },
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    if(data.success) {
      alert('Project saved and images uploaded successfully!');
      window.location.reload();
    } else {
      // Safely print structural array messages or fallback to explicit message strings
      if (data.errors) {
        let errorMessages = Object.values(data.errors).flat().join("\n");
        alert("Validation Mismatch:\n" + errorMessages);
      } else {
        alert('Error: ' + (data.error || 'Please check your input values.'));
      }
    }
  })
  .catch(err => {
    console.error(err);
    alert('Server communication error occurred while uploading.');
  });
}

function clearForm() {
  document.getElementById('project-form').reset();
  document.getElementById('f-folder').value = 'assets/images/projects';
}
</script>
</body>
</html>