import http.client, json
headers = { "charset" : "utf-8", "Content-Type": "application/json" }


conn = http.client.HTTPConnection("192.168.56.1")

sample = { "temp_value" : 123 }

sampleJson = json.dumps(sample, ensure_ascii = 'False')

# Send the JSON data as-is -- we don't need to URL Encode this
conn.request("POST", "/PROYECTO/recibealarma.php", sampleJson, headers)

response = conn.getresponse()

print(response.read())

conn.close()
