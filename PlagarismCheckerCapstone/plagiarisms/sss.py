import os
import urllib.parse
import json
import sys

from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity

student_files = [doc for doc in os.listdir() if doc.endswith('.txt')]
directory = 'C:/xampp/htdocs/Capstone/plagiarisms'
a = os.walk(directory)
b = [x for x in a]
students_files = b[0][2:][0]
student_files = [directory+"/"+a for a in students_files]
student_files = [doc for doc in student_files if doc.endswith('.txt')]

student_notes = [open(_file, encoding='utf-8').read()
                 for _file in student_files]

def vectorize(Text): return TfidfVectorizer().fit_transform(Text).toarray()
def similarity(doc1, doc2): return cosine_similarity([doc1, doc2])

vectors = vectorize(student_notes)
s_vectors = list(zip(student_files, vectors))

def check_plagiarism():
    plagiarism_results = {}
    global s_vectors
    for student_a, text_vector_a in s_vectors:
        new_vectors = s_vectors.copy()
        current_index = new_vectors.index((student_a, text_vector_a))
        del new_vectors[current_index]
        for student_b, text_vector_b in new_vectors:
            sim_score = similarity(text_vector_a, text_vector_b)[0][1]
            if(sim_score > 0):
                sim_score = round(sim_score, 1)
                student_pair = sorted((os.path.splitext(student_a)[0], os.path.splitext(student_b)[0]))
                res = (student_pair[0]+' similar to '+ student_pair[1])
                plagiarism_results[res] = sim_score
    api = json.dumps(plagiarism_results)
    return api
print(check_plagiarism())

