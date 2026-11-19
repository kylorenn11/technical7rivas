<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Ron Rivas TFA7' }} | Ron Rivas TFA7</title>
    <style>
        :root{--ink:#172033;--muted:#687386;--line:#e4e8ef;--bg:#f3f6f8;--brand:#0f766e;--brand-dark:#115e59;--green:#0f9f6e;--gold:#e6bd68;}
        *{box-sizing:border-box}body{margin:0;font-family:Inter,ui-sans-serif,system-ui,-apple-system,Segoe UI,sans-serif;background:var(--bg);color:var(--ink)}
        a{color:inherit;text-decoration:none}.nav{height:72px;background:#112033;color:#fff;border-bottom:1px solid #22344b;display:flex;align-items:center;justify-content:space-between;padding:0 clamp(20px,5vw,72px);position:sticky;top:0;z-index:2;box-shadow:0 8px 28px #13223818}.brand{font-weight:850;letter-spacing:-.04em;font-size:20px}.brand span{color:var(--gold);margin-left:6px}.links{display:flex;gap:8px;align-items:center}.links a{padding:10px 14px;border-radius:10px;color:#d9e1eb;font-size:14px;font-weight:650}.links a:hover,.links a.active{background:#ffffff18;color:#fff}
        .wrap{max-width:1120px;margin:0 auto;padding:58px 24px}.hero{display:grid;grid-template-columns:1.1fr .9fr;gap:42px;align-items:center;padding:38px 0 66px}.eyebrow{text-transform:uppercase;letter-spacing:.14em;color:var(--brand);font-weight:800;font-size:12px}.hero h1{font-size:clamp(38px,6vw,68px);line-height:1.03;letter-spacing:-.06em;margin:16px 0}.hero p{font-size:18px;line-height:1.7;color:var(--muted);max-width:620px}.button{display:inline-block;background:var(--brand);color:#fff;padding:13px 18px;border-radius:11px;font-weight:750;margin-top:12px;transition:.18s ease}.button:hover{background:var(--brand-dark);transform:translateY(-1px)}.hero-card{background:linear-gradient(145deg,#122033,#0f766e);border-radius:24px;color:#fff;padding:30px;box-shadow:0 20px 50px #17393b30}.hero-card .mini{color:#f1d794;font-size:13px}.metric{font-size:54px;font-weight:850;letter-spacing:-.07em;margin:18px 0 4px}.metric-label{color:#e0eee9}
        .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}.card{background:#fff;border:1px solid var(--line);border-radius:18px;padding:24px;box-shadow:0 10px 30px #17203308}.card h3{margin:0 0 8px;font-size:17px}.card p{color:var(--muted);line-height:1.6;margin:0}.page-head{margin-bottom:26px}.page-head h1{font-size:40px;letter-spacing:-.05em;margin:0 0 8px}.page-head p{color:var(--muted);margin:0}.toolbar{display:flex;justify-content:space-between;gap:16px;align-items:end;margin-bottom:26px}.toolbar .page-head{margin-bottom:0}.toolbar .button{margin-top:0}
        .table-wrap{overflow:auto;background:#fff;border:1px solid var(--line);border-radius:16px;box-shadow:0 10px 30px #17203308}.data{border-collapse:collapse;width:100%;min-width:700px}.data th,.data td{text-align:left;padding:16px 18px;border-bottom:1px solid var(--line);font-size:14px}.data th{font-size:12px;text-transform:uppercase;letter-spacing:.08em;color:#6d788a;background:#f7f9fa}.data tr:last-child td{border-bottom:0}.id{font-weight:750;color:var(--brand-dark)}.badge{display:inline-block;border-radius:999px;padding:5px 10px;font-size:12px;font-weight:750;background:#e9f8f1;color:var(--green)}.badge.off{background:#f1f2f5;color:#7a8498}.about-grid{display:grid;grid-template-columns:1fr 1fr;gap:18px}.footer{color:#8490a0;text-align:center;padding:28px 24px 42px;font-size:13px}
        .button.secondary{background:#fff;color:var(--brand-dark);border:1px solid #cfd8dd}.button.secondary:hover{background:#edf6f4}.alert{border-radius:12px;padding:14px 16px;margin:0 0 18px;font-size:14px}.alert.success{background:#e9f8f1;color:#146c4b}.alert.error{background:#fff0ee;color:#c0392b}.alert ul{margin:8px 0 0 20px;padding:0}.form-shell{max-width:680px;margin:0 auto}.form-card{background:#fff;border:1px solid var(--line);border-radius:18px;padding:26px;box-shadow:0 12px 35px #1720330b}.field{margin-bottom:18px}.field label{display:block;font-weight:750;font-size:14px;margin-bottom:7px}.optional{font-weight:500;color:var(--muted);font-size:12px}.field input{width:100%;border:1px solid #ccd5db;border-radius:10px;padding:12px 13px;font:inherit;color:var(--ink);background:#fff}.field input:focus{outline:3px solid #d5eeea;border-color:var(--brand)}.field-error{display:block;color:#c0392b;margin-top:6px}.form-actions{display:flex;justify-content:flex-end;gap:10px;border-top:1px solid var(--line);padding-top:20px;margin-top:24px}.current-avatar{display:flex;align-items:center;gap:12px;color:var(--muted);font-size:13px;margin:4px 0 20px}.avatar{width:44px;height:44px;border-radius:50%;object-fit:cover;background:#d9efeb;display:block}.avatar-placeholder{display:flex;align-items:center;justify-content:center;font-weight:800;color:var(--brand-dark)}.table-link{color:var(--brand-dark);font-weight:750}
        @media(max-width:760px){.links a{padding:8px;font-size:12px}.hero,.about-grid{grid-template-columns:1fr}.hero{padding-top:12px}.grid{grid-template-columns:1fr}.nav{padding:0 14px}.brand{font-size:17px}.links{gap:0}.wrap{padding:42px 18px}.toolbar{align-items:start;flex-direction:column}}
    </style>
</head>
<body>
    <nav class="nav">
        <a class="brand" href="{{ url('/') }}">Ron Rivas<span>TFA7</span></a>
        <div class="links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/customers') }}">Customers</a>
            <a href="{{ url('/users') }}">Users</a>
        </div>
    </nav>
    <main class="wrap">@yield('content')</main>
    <footer class="footer">IT0049 Web System Technologies · Ron Rivas TFA7</footer>
</body>
</html>
