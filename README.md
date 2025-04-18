# Enigma BBS WordPress Plugin

Bring your **Enigma½ BBS** directly into WordPress — complete with admin control and a live terminal interface.

## 🔧 Features

- Embed a live terminal session to your BBS using [xterm.js](https://xtermjs.org/)
- Admin interface to start, stop, or restart the BBS via `pm2` or command line
- Real-time terminal powered by WebSockets and `node-pty`
- Shortcode `[bbs_terminal]` to display terminal anywhere in your site
- Stylized retro terminal interface

## 📦 Installation

1. Upload the plugin ZIP to your WordPress `wp-content/plugins/` directory
2. Activate the plugin in the WordPress Admin
3. Navigate to **Admin > Enigma BBS** to control your BBS instance

## 🚀 Start the Terminal WebSocket Server

You need Node.js installed.

```bash
cd wp-content/plugins/enigma-bbs-wp/node
npm install ws node-pty
node server.js
```

> This listens on `ws://localhost:3001` by default.

## 🖥 Embed the Terminal

Use this shortcode in any post or page:

```
[bbs_terminal]
```

## 🔐 Security Considerations

- The admin interface is restricted to users with `manage_options`
- The terminal frontend should be protected with authentication or local-only access
- Consider placing `node/server.js` behind a reverse proxy or tunnel for SSL

## ⚙️ Assumptions

This plugin assumes your BBS is launched using:
```bash
pm2 start enigma-bbs
```

You can modify the commands in `/includes/bbs-control.php` to suit your environment.

## 📁 File Structure

```
enigma-bbs-wp/
├── enigma-bbs-wp.php
├── admin/
├── public/
├── includes/
├── assets/css/
├── assets/js/
└── node/
```

## 💬 Credits

- [Enigma½ BBS](https://github.com/NuSkooler/enigma-bbs)
- [xterm.js](https://xtermjs.org/)
- [node-pty](https://github.com/microsoft/node-pty)

---

Plugin developed by Jeremy Anderson / [jeremyanderson.tech](https://jeremyanderson.tech)
