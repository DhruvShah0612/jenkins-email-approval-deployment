# ✅ Jenkins Email-Based Approval CI/CD Pipeline

This project implements a Jenkins Pipeline that supports **manual approval via email** before performing **push** or **pull** operations on a GitHub repository. Upon approval, the code is either pushed to GitHub or pulled from GitHub and deployed to an **Apache Web Server**.

---

## 📌 Features

- Manual approval for **Push** and **Pull** actions
- Email notifications with **Approve/Abort** links
- Secure GitHub operations using **SSH keys**
- Deployment to Apache server on approval
- Pipeline View for visual feedback

---

## 🔧 Jenkins Plugin Configuration

### ✅ Required Plugins

Install the following plugins from **Manage Jenkins → Plugin Manager**:

- [x] **Pipeline**
- [x] **Pipeline: Stage View**
- [x] **Email Extension Plugin**
- [x] **Mail Watcher**
- [x] **Git server**
- [x] **SSH Agent Plugin**

---

## 🔑 Global Configuration Steps

### 📁 Global Trusted Pipeline Libraries

> Navigate to: `Manage Jenkins → Configure System → Global Pipeline Libraries`

- **SCM**: Git  
- **Repository**: *your project GitHub repo URL*  
- **Credentials**:  
  - Kind: **SSH Username with private key**  
  - ID: `github-ssh`  
  - Username: *leave blank or set to git*  
  - Private Key: `Enter directly` → Paste your private SSH key

---

### ✉️ Extended Email Notification

> Configure under: `Manage Jenkins → Configure System → Extended Email Notification`

- **SMTP Server**: `smtp.gmail.com`
- **SMTP Port**: `465`
- **Use SSL**: ✅
- **Credentials**:
  - Username: `<YOUR EMAIL ID>`
  - Password: `<GMAIL App Password>`
  
---

### ✉️ Email Notification (Default Mailer)

> Configure under: `Manage Jenkins → Configure System → Email Notification`

- **SMTP Server**: `smtp.gmail.com`
- **Default User Suffix**: `@gmail.com`
- **Use SMTP Authentication**: ✅
  - Username: `<YOUR EMAIL ID>`
  - Password: `<GMAIL App Password>`
- **Use SSL**: ✅
- **SMTP Port**: `465`
- **Reply-To Address**: `<YOUR EMAIL ID>`
- ✅ **Test Email**: Send to `<YOUR EMAIL ID>`

---
