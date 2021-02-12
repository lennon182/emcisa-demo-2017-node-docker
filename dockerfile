FROM node

RUN mkdir -p /app/emcisa

WORKDIR /app/emcisa

COPY package*.json ./

COPY . .

RUN npm install

EXPOSE 8500

CMD ["node", "server.js"]