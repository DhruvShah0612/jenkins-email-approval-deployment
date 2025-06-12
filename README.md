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

## 🔗 GitHub and Jenkins SSH Connection Setup

To enable **secure push and pull** operations between Jenkins and GitHub via SSH, follow these steps:

---

## ✅ STEP 1: Generate SSH Key on Jenkins Server

```bash
ssh-keygen -t rsa -b 4096 -m PEM -f ~/.ssh/jenkins_rsa
cat ~/.ssh/jenkins_rsa.pub
```

This creates:  
- **Private Key:** `~/.ssh/jenkins_rsa`  
- **Public Key:** `~/.ssh/jenkins_rsa.pub`

---

## ✅ STEP 2: Add Public Key to GitHub

1. Go to your GitHub Repository.
2. Navigate to **Settings → Deploy keys → Add deploy key**.
3. Paste the contents of `jenkins_rsa.pub`.
4. Check **"Allow write access"** if using for push.

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
  - - To get your private key, run:
      ```bash
      cat ~/.ssh/jenkins_rsa
      ```
      
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
