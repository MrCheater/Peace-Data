from library import build
from http.server import HTTPServer, BaseHTTPRequestHandler
from io import BytesIO
from urllib.parse import urlparse, parse_qs

class SimpleHTTPRequestHandler(BaseHTTPRequestHandler):

    def do_GET(self):
        self.send_response(200)
        self.end_headers()
        self.wfile.write(b'Hello, hackathon!')

    def do_POST(self):
        self.send_response(200)
        self.end_headers()
        query_components = parse_qs(urlparse(self.path).query)
        example_value = str(query_components["example_value"][0])
        test = build(example_value)

        response = BytesIO()
        response.write(test.encode())
        self.wfile.write(response.getvalue())

httpd = HTTPServer(('localhost', 3002), SimpleHTTPRequestHandler)
httpd.serve_forever()