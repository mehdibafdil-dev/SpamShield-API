# SpamShield API 🛡️

A powerful and efficient spam detection system that combines PHP and Python Flask to provide real-time spam detection capabilities through a REST API interface.

## 🌟 Features

- Real-time spam detection
- RESTful API architecture
- Machine learning-based classification
- Cross-platform compatibility
- Easy integration with existing systems

## 🔧 Technologies Used

- PHP (Frontend/Client)
- Python Flask (Backend)
- NLTK for text processing
- Machine Learning (Pickle model)
- CORS support for cross-origin requests

## 📋 Prerequisites

- PHP 7.0 or higher
- Python 3.6 or higher
- NLTK library
- Flask and Flask-CORS
- Pickle model file (spamClassifier.pkl)
- Count vectorizer file (count_vect)

## 🚀 Installation

1. Clone the repository:
```bash
git clone https://github.com/[your-username]/spamshield-api.git
```

2. Install Python dependencies:
```bash
pip install flask flask-cors nltk
```

3. Download required NLTK data:
```python
import nltk
nltk.download('punkt')
nltk.download('stopwords')
nltk.download('wordnet')
```

4. Set up the project structure:
```
spamshield-api/
├── backend/
│   ├── app.py
│   └── templates/
│       └── index.html
├── frontend/
│   └── index.php
└── Model/
    ├── spamClassifier.pkl
```

## 💻 Usage

1. Start the Flask server:
```bash
python app.py
```

2. Configure your PHP server to serve index.php

3. Make API calls to check for spam:
```php
$message = "Your text here";
$result = checkIfSpam($message);
```

## 🔍 API Endpoints

- `POST /verify`: Check if a message is spam
  - Parameters: `message` (string)
  - Returns: JSON response with spam status

## 📝 Response Format

```json
{
    "data": "Spam Message!!" | "Non Spam Message!!",
    "code": 1 | 0
}
```

## ⚖️ License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👤 Author

MEHDI BAFDIL
- GitHub: [@mehdibafdil](https://github.com/mehdibafdil-dev)
- Email: [mehdibafdil@gmail.com]

## 🤝 Contributing

Contributions, issues, and feature requests are welcome! Feel free to check the [issues page](https://github.com/mehdibafdil-dev/spamshield-api/issues).

## ⭐ Show your support

Give a ⭐️ if this project helped you!

## 📝 Note

Make sure to properly configure your machine learning model and vectorizer files before deployment.
