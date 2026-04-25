FROM node:22-alpine
WORKDIR /app
COPY . .
RUN if [ -f package.json ]; then npm ci || npm install; fi
EXPOSE 5173
CMD ["npm", "run", "dev", "--", "--host", "0.0.0.0", "--port", "5173"]
