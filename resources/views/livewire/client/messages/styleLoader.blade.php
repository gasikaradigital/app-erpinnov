<style>

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .spinner-container {
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .loading-text, .waiting-text {
        font-size: 18px;
        color: #333;
        font-weight: 500;
        margin: 0;
    }

    .waiting-text {
        font-size: 16px;
        color: #666;
        margin: 0;
    }

    .sk-wave {
        width: 100px; /* Augmenté pour plus de visibilité */
        height: 60px; /* Augmenté pour plus de visibilité */
        display: flex;
        justify-content: space-between;
        margin: 0 auto;
    }

    .sk-wave-rect {
        background-color: #696cff;
        height: 100%;
        width: 15%;
        animation: sk-wave 1.2s infinite ease-in-out;
    }

    .sk-wave-rect:nth-child(1) { animation-delay: -1.2s; }
    .sk-wave-rect:nth-child(2) { animation-delay: -1.1s; }
    .sk-wave-rect:nth-child(3) { animation-delay: -1.0s; }
    .sk-wave-rect:nth-child(4) { animation-delay: -0.9s; }
    .sk-wave-rect:nth-child(5) { animation-delay: -0.8s; }

    @keyframes sk-wave {
        0%, 40%, 100% { transform: scaleY(0.4); }
        20% { transform: scaleY(1.0); }
    }
    
/*.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(2px);
    z-index: 1000;
    display: none;
    justify-content: center;
    align-items: center;
}

.spinner-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.spinner {
    width: 60px;
    height: 60px;
    border: 4px solid #f3f3f3;
    border-top: 4px solid #3498db;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin: 0 auto 20px;
}

.loading-text {
    font-size: 18px;
    color: #333;
    font-weight: 500;
    margin: 0;
}

.waiting-text {
    font-size: 16px;
    color: #666;
    margin: 0;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}*/
</style>